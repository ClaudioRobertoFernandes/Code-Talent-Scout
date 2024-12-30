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

class DashboardComponent extends Component
{
    protected $client;

    protected $baseUrl = 'https://api.github.com';

    public $users = [];

    public $query = '';
    public $programmingLanguage = '';

    public $perPage = 15;

    public $location = '';
    public $minFollowers = 0;
    public $maxFollowers = 0;

    public function search(): void
    {
        $queryParts = [];

        if ($this->programmingLanguage) {
            $queryParts[] = "language:{$this->programmingLanguage}";
        }

        if ($this->location) {
            $queryParts[] = "location:{$this->location}";
        }

        if ($this->minFollowers && $this->maxFollowers) {
            $queryParts[] = "followers:{$this->minFollowers}..{$this->maxFollowers}";
        } elseif ($this->minFollowers) {
            $queryParts[] = "followers:>={$this->minFollowers}";
        } elseif (!empty($this->maxFollowers)) {
            $queryParts[] = "followers:<={$this->maxFollowers}";
        }

        $query = implode(' ', $queryParts);

        ds()->clear();
        ds($query)->s('check query');
        ds($this->programmingLanguage)->s('Programming Language');
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Authorization' => 'token '.config('services.github.token'),
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);

        try {
            $response = $this->client->get('/search/users', [
                'query' => [
                    'q' => $query,
                    'per_page' => $this->perPage,
                ],
            ]);

            $this->users = json_decode($response->getBody(), true)['items'];
        } catch (RequestException $e) {
            // Log do erro
            Log::error('GitHub User Search Error: '.$e->getMessage());
        } catch (GuzzleException $e) {
            // Log do erro
            Log::error('GitHub User Search Error: '.$e->getMessage());
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
