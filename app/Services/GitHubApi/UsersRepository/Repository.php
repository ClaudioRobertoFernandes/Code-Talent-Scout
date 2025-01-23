<?php

namespace App\Services\GitHubApi\UsersRepository;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class Repository
{
    public static function getRepository($user): ?array
    {

        $client = new Client([
            'base_uri' => 'https://api.github.com',
            'headers' => [
                'Authorization' => "token ". config('services.github.token'),
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);
        try {
            $userRepo = $client->get("/users/{$user}/repos", [
                'query' => [
                    'per_page' => 1,
                ]
            ]);

            return json_decode($userRepo->getBody()->getContents(), true);

        } catch (\Exception $e) {
            Log::error("GitHub Repositories Fetch Error for user {$user}: {$e->getMessage()}");
            return null;
        }
    }

}
