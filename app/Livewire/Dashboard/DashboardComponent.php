<?php

namespace App\Livewire\Dashboard;

use GuzzleHttp\Client;
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
    public $query = 'laravel developer';
    public $perPage = 15;
    public function render(): Factory|Application|View|ViewView
    {
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Authorization' => 'token ' . config('services.github.token'),
                'Accept' => 'application/vnd.github.v3+json'
            ]
        ]);

        try {
            $response = $this->client->get('/search/users', [
                'query' => [
                    'q' => $this->query,
                    'per_page' => $this->perPage
                ]
            ]);
            ds($response)->s('Response');

            $this->users =  json_decode($response->getBody(), true)['items'];

            ds($this->users)->s('Users');
        } catch (RequestException $e) {
            // Log do erro
            Log::error('GitHub User Search Error: ' . $e->getMessage());
        }

        return view('livewire.dashboard.dashboard-component');
    }
}
