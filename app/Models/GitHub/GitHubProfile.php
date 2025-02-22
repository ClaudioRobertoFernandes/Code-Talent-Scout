<?php

namespace App\Models\GitHub;

use App\Services\GitHubApi\Users\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GitHubProfile extends Model
{

    protected $fillable =[
        'user_id',
        'login',
        'gitId',
        'nodeId',
        'avatarUrl',
        'gravatarId',
        'url',
        'htmlUrl',
        'followersUrl',
        'followingUrl',
        'gistsUrl',
        'starredUrl',
        'subscriptionsUrl',
        'organizationsUrl',
        'reposUrl',
        'eventsUrl',
        'receivedEventsUrl',
        'type',
        'userViewType',
        'siteAdmin',
        'name',
        'company',
        'blog',
        'location',
        'email',
        'hireable',
        'bio',
        'twitterUsername',
        'publicRepos',
        'publicGists',
        'followers',
        'following',
        'gitCreatedAt',
        'gitUpdatedAt',
    ];

    protected $casts = [
        'gitCreatedAt' => 'timestamp',
        'gitUpdatedAt' => 'timestamp',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
