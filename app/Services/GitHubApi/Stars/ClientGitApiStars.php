<?php

namespace App\Services\GitHubApi\Stars;

class ClientGitApiStars
{
    public static function countClientGitApiStars(array $repos): int
    {
        $stars = 0;

        foreach ($repos as $repo) {
            $stars += $repo['stars'];
        }

        return $stars ?? 0;
    }
}
