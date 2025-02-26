<?php

namespace App\Livewire\Users\Selection;

use Livewire\Component;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View as ViewView;
use Livewire\Attributes\Session;
use Livewire\WithPagination;

class SelectionUserComponent extends Component
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
        // nothing
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
        return view('livewire.users.selection.selection-user-component');
    }
}
