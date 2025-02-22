<?php

namespace App\Services\GitHubApi\Users;

use App\Models\GitHub\GitHubProfile;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use App\Models\User as UserModel;

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
            $userGit = json_decode($response->getBody(), true);

                $createdAt = Carbon::parse($userGit['created_at']);
                $updatedAt = Carbon::parse($userGit['updated_at']);

                $newUserGit = new GitHubProfile();
                $newUserGit->user_id = auth()->id();
                $newUserGit->login = $userGit['login'] ?? null;
                $newUserGit->gitId = $userGit['id'] ?? null;
                $newUserGit->nodeId = $userGit['node_id'] ?? null;
                $newUserGit->avatarUrl = $userGit['avatar_url'] ?? null;
                $newUserGit->gravatarId = $userGit['gravatar_id'] ?? null;
                $newUserGit->url = $userGit['url'] ?? null;
                $newUserGit->htmlUrl = $userGit['html_url'] ?? null;
                $newUserGit->followersUrl = $userGit['followers_url'] ?? null;
                $newUserGit->followingUrl = $userGit['following_url'] ?? null;
                $newUserGit->gistsUrl = $userGit['gists_url'] ?? null;
                $newUserGit->starredUrl = $userGit['starred_url'] ?? null;
                $newUserGit->subscriptionsUrl = $userGit['subscriptions_url'] ?? null;
                $newUserGit->organizationsUrl = $userGit['organizations_url'] ?? null;
                $newUserGit->reposUrl = $userGit['repos_url'] ?? null;
                $newUserGit->eventsUrl = $userGit['events_url'] ?? null;
                $newUserGit->receivedEventsUrl = $userGit['received_events_url'] ?? null;
                $newUserGit->type = $userGit['type'] ?? null;
                $newUserGit->userViewType = $userGit['user_view_type'] ?? null;
                $newUserGit->siteAdmin = $userGit['site_admin'] ?? null;
                $newUserGit->name = $userGit['name'] ?? null;
                $newUserGit->company = $userGit['company'] ?? null;
                $newUserGit->blog = $userGit['blog'] ?? null;
                $newUserGit->location = $userGit['location'] ?? null;
                $newUserGit->email = $userGit['email'] ?? null;
                $newUserGit->hireable = $userGit['hireable'] ?? null;
                $newUserGit->bio = $userGit['bio'] ?? null;
                $newUserGit->twitterUsername = $userGit['twitter_username'] ?? null;
                $newUserGit->publicRepos = $userGit['public_repos'] ?? null;
                $newUserGit->publicGists = $userGit['public_gists'] ?? null;
                $newUserGit->followers = $userGit['followers'] ?? null;
                $newUserGit->following = $userGit['following'] ?? null;
                $newUserGit->gitCreatedAt = $createdAt;
                $newUserGit->gitUpdatedAt = $updatedAt;
                $newUserGit->created_at = now();
                $newUserGit->updated_at = now();
                $newUserGit->save();

            return json_decode($response->getBody(), true);

        } catch (\Exception $e) {
            Log::error("GitHub User Fetch Error for {$username}: " . $e->getMessage());
            return null;
        }
    }
}
