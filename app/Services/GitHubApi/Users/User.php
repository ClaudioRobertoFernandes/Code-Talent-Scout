<?php

namespace App\Services\GitHubApi\Users;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class User
{
    public static function getUser($username)
    {
        $client = new Client([
            'base_uri' => 'https://api.github.com',
            'headers' => [
                'Authorization' => 'token ' . config('services.github.token'),
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);

        try {
            $response = $client->get("/users/{$username}");
            return json_decode($response->getBody(), true);

        } catch (\Exception $e) {
            Log::error("GitHub User Fetch Error for {$username}: " . $e->getMessage());
            return null;
        }
    }
}
