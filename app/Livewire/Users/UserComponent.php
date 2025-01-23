<?php

namespace App\Livewire\Users;

use App\Services\GitHubApi\Repositories\RepoUser;
use App\Services\GitHubApi\Users\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\View\View as ViewView;
use Livewire\Component;

class UserComponent extends Component
{
    public string $avatar = '';
    public string $name = '';
    public string $company = '';
    public string $location = '';
    public int $publicRepos = 0;
    public int $followers = 0;
    public array $repositories = [];

    public function mount($user): void
    {
        $user = User::getUser($user);
        $this->avatar = $user['avatar_url'] ?? '';
        $this->name = $user['name'] ?? '';
        $this->company = $user['company'] ?? '';
        $this->location = $user['location'] ?? '';
        $this->publicRepos = $user['public_repos'] ?? 0;
        $this->followers = $user['followers'] ?? 0;
        $this->repositories = RepoUser::getRepoUser($user['login']);
    }

    public function render(): Factory|Application|View|ViewView
    {
        return view('livewire.users.user-component');
    }
}
