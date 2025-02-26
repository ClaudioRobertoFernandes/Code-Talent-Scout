<?php

namespace App\Services\GitHubApi\UsersRepository;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;

class Repository
{
    public static function getRepository($user, $repository): ?array
    {
//        dd($user. ' - ' .$repository);
        $client = new Client([
            'base_uri' => 'https://api.github.com',
            'headers' => [
                'Authorization' => "token ". config('services.github.token'),
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);
        try {
            // Debug da URL completa
            $url = "/repos/{$user}/{$repository}";
            Log::info('Making GitHub API request', ['url' => $url]);

            $userRepo = $client->get($url, [
                'query' => [
                    'per_page' => 1,
                ]
            ]);

            return json_decode($userRepo->getBody()->getContents(), true);

        } catch (ClientException $e) {
            // Log para fornecer mais contexto sobre o erro
            Log::info("GitHub Repositories Fetch Error for user {$user} and repo {$repository}: " . $e->getMessage());

            // Retornar mensagem amigável para evitar falhas inesperadas na aplicação
            return [
                'error' => true,
                'message' => 'Repository not found or invalid request',
                'details' => json_decode($e->getResponse()->getBody()->getContents(), true)
            ];
        } catch (\Exception $e) {
            Log::info("Unexpected Error: " . $e->getMessage());
            return [
                'error' => true,
                'message' => 'An unexpected error occurred while fetching the repository'
            ];
        }
    }

}
