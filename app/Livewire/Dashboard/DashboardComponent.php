<?php

namespace App\Livewire\Dashboard;

use App\Models\GitHub\GitHubProfile;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View as ViewView;
use Livewire\Component;
use Livewire\WithPagination;
use function Termwind\render;

class DashboardComponent extends Component
{
    use WithPagination;

    protected $client;
    protected const string BASEURL = 'https://api.github.com';
    public const int PERPAGE = 25;
    public const int DEFAULT = 0;
    public array $users = [];
    public string $query = '';
    public string $programmingLanguage = '';
    public string $location = '';
    public string $searchName = '';

    public int $minFollowers = self::DEFAULT;
    public int $totalUsers = self::DEFAULT;
    public int $maxFollowers = self::DEFAULT;
    public int $minRepos = self::DEFAULT;
    public int $maxRepos = self::DEFAULT;
    public int $minStars = self::DEFAULT;
    public int $maxStars = self::DEFAULT;
    public function updatingPerPage($value): void
    {
        // nothing
    }
    public function search(): void
    {

        $this->client = self::userApiGit();

        $queryParts = [];

        if (!empty($this->searchName)) {
            $queryParts[] = "{$this->searchName} in:login";
        }

        if (!empty($this->programmingLanguage)) {
            $queryParts[] = "language:\"{$this->programmingLanguage}\"";
        }

        if (!empty($this->location)) {
            $queryParts[] = "location:\"{$this->location}\"";
        }

        if (!empty($this->minRepos) && !empty($this->maxRepos)) {
            $queryParts[] = "repos:{$this->minRepos}..{$this->maxRepos}";
        } elseif (!empty($this->minRepos)) {
            $queryParts[] = "repos:>={$this->minRepos}";
        } elseif (!empty($this->maxRepos)) {
            $queryParts[] = "repos:<={$this->maxRepos}";
        }

        if (!empty($this->minFollowers) && !empty($this->maxFollowers)) {
            $queryParts[] = "followers:{$this->minFollowers}..{$this->maxFollowers}";
        } elseif (!empty($this->minFollowers)) {
            $queryParts[] = "followers:>={$this->minFollowers}";
        } elseif (!empty($this->maxFollowers)) {
            $queryParts[] = "followers:<={$this->maxFollowers}";
        }

        $queryParts[] = 'type:user';

        $query = implode(' ', $queryParts);

        try {
            $response = $this->client->get('/search/users', [
                'query' => [
                    'q' => $query,
                    'per_page' => self::PERPAGE,
                ],
            ]);

            $responseBody = json_decode($response->getBody(), true);
            $this->users = $responseBody['items'] ?? [];

            $filteredUsers = [];

            foreach ($this->users as $user) {
                $username = $user['login'];

                $reposResponse = $this->client->get("/users/{$username}/repos", [
                    'query' => [
                        'type' => 'owner'
                    ]
                ]);

                $repos = json_decode($reposResponse->getBody(), true);

                $totalRepos = count($repos);

                $totalStars = array_reduce($repos, function ($carry, $repo) {
                    return $carry + ($repo['stargazers_count'] ?? 0);
                }, 0);

                $userDetailsResponse = $this->client->get("/users/{$username}");
                $userDetails = json_decode($userDetailsResponse->getBody(), true);

                $totalFollowers = $userDetails['followers'] ?? 0;

                $user['total_stars'] = $totalStars;
                $user['total_repos'] = $totalRepos;
                $user['total_followers'] = $totalFollowers;

                if (
                    (!empty($this->minStars) && $totalStars < $this->minStars) ||
                    (!empty($this->maxStars) && $totalStars > $this->maxStars)
                ) {
                    continue;
                }

                $filteredUsers[] = $user;
            }

            $this->users = $filteredUsers;

        } catch (\Exception $e) {
            Log::error('GitHub User Search Error: ' . $e->getMessage());
            $this->users = [];
        }
    }

    public function resetFields()
    {
        $this->query = '';
        $this->programmingLanguage = '';
        $this->location = '';
        $this->minFollowers = self::DEFAULT;
        $this->maxFollowers = self::DEFAULT;
        $this->users = [];
        $this->minRepos = self::DEFAULT;
        $this->maxRepos = self::DEFAULT;
        $this->minStars = self::DEFAULT;
        $this->maxStars = self::DEFAULT;
        $this->searchName = '';
    }

    private static function userApiGit(): Client
    {
        return new Client([
            'base_uri' => self::BASEURL,
            'headers' => [
                'Authorization' => 'token ' . config('services.github.token'),
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);
    }

    public function render(): Factory|Application|View|ViewView
    {
        return view('livewire.dashboard.dashboard-component');
    }
}
