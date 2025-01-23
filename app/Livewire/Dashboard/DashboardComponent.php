<?php

namespace App\Livewire\Dashboard;

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

class DashboardComponent extends Component
{
    use WithPagination;

    protected $client;
    protected $baseUrl = 'https://api.github.com';
    public $users = [];
    public $query = '';
    public $programmingLanguage = '';
    public $perPage = 10;
    public $location = '';
    public $minFollowers = 0;
    public $totalUsers = 0;
    public $maxFollowers = 0;
    public function updatingPerPage($value): void
    {
        $this->resetPage();
        $this->perPage = $value;
        $this->search();
    }
    public function search(): void
    {
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Authorization' => 'token ' . config('services.github.token'),
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);

        $queryParts = [];

        if (!empty($this->programmingLanguage)) {
            $queryParts[] = "language:\"{$this->programmingLanguage}\"";
        }

        if (!empty($this->location)) {
            $queryParts[] = "location:\"{$this->location}\"";
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
                    'per_page' => $this->perPage,
                ],
            ]);

            $responseBody = json_decode($response->getBody(), true);
            $this->users = $responseBody['items'] ?? [];

        } catch (\Exception $e) {
            Log::error('GitHub User Search Error: ' . $e->getMessage());
            $this->users = [];
        }
    }

    public static function getUserRepositoriesWithStars(string $username, $token = null): int
    {
        $token = $token ?? config('services.github.token');

        $client = new Client([
            'base_uri' => 'https://api.github.com',
            'headers' => [
                'Authorization' => "token {$token}",
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);

        try {
            $client->get("/users/{$username}/repos", [
                'query' => [
                    'per_page' => 1,
                ]
            ]);

            $user = $client->get("/users/{$username}");
            $userData = json_decode($user->getBody(), true);

            return $userData['public_repos'] > 0 ? $userData['public_stargazers_count'] ?? 0 : 0;

        } catch (\Exception $e) {
            Log::error("GitHub Repositories Fetch Error for user {$username}: {$e->getMessage()}");
            return 0;
        }
    }

    public function resetFields(): void
    {
        $this->query = '';
        $this->programmingLanguage = '';
        $this->location = '';
        $this->minFollowers = 0;
        $this->maxFollowers = 0;
        $this->users = [];
    }
    public function render(): Factory|Application|View|ViewView
    {
        return view('livewire.dashboard.dashboard-component');
    }
}
