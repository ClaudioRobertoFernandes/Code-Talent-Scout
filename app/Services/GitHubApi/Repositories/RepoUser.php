<?php

namespace App\Services\GitHubApi\Repositories;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class RepoUser
{
    public static function getRepoUser($username): array
    {
        $client = new Client([
            'base_uri' => 'https://api.github.com',
            'headers' => [
                'Authorization' => 'token ' . config('services.github.token'),
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);

        try {
            $response = $client->get("/users/{$username}/repos", [
                'query' => [
                    'type' => 'owner',
                ]
            ]);

            $repos = json_decode($response->getBody(), true);

            usort($repos, function($a, $b) {
                return $b['stargazers_count'] <=> $a['stargazers_count'];
            });

            return array_map(function($repo) {
                return [
                    'name' => $repo['name'],
                    'full_name' => $repo['full_name'],
                    'stars' => $repo['stargazers_count'],
                    'language' => $repo['language'],
                    'description' => $repo['description'],
                    'url' => $repo['html_url'],
                    'created_at' => $repo['created_at'],
                    'updated_at' => $repo['updated_at'],
                    'forks_count' => $repo['forks_count'],
                ];
            }, $repos);

        } catch (\Exception $e) {
            Log::error("GitHub User Repos Fetch Error for {$username}: " . $e->getMessage());
            return [];
        }
    }
}
