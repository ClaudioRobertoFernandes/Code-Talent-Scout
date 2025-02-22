<?php

namespace App\Livewire\Users;

use App\Models\GitHub\GitHubProfile;
use App\Services\GitHubApi\Repositories\RepoUser;
use App\Services\GitHubApi\Users\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\View\View as ViewView;
use Livewire\Component;

class UserComponent extends Component
{
    public $avatar;
    public $name;
    public $userName;
    public $login;
    public $company;
    public $location;
    public int $publicRepos = 0;
    public int $followers = 0;
    public array $repositories = [];

    public function mount($user): void
    {

        $userExists = GitHubProfile::where('login', $user)->first();

        if($userExists){
            $this->userName = $userExists->name;
            $this->login = $userExists->login;
            $this->avatar = $userExists->avatarUrl;
            $this->name = $userExists->name;
            $this->company = $userExists->company;
            $this->location = $userExists->location;
            $this->publicRepos = $userExists->publicRepos;
            $this->followers = $userExists->followers;
            $this->repositories = RepoUser::getRepoUser($user);
        }else{
            $userGit = User::getUser($user);
            $this->userName = $userGit['name'] ?? '';
            $this->avatar = $userGit['avatar_url'] ??  '';
            $this->login = $userGit['login'] ??  '';
            $this->name = $userGit['name'] ??  '';
            $this->company = $userGit['company'] ??  '';
            $this->location = $userGit['location'] ??  '';
            $this->publicRepos = $userGit['public_repos'] ??  '';
            $this->followers = $userGit['followers'] ??  '';
            $this->repositories = RepoUser::getRepoUser($userGit['login']);
        }

    }

    public function render(): Factory|Application|View|ViewView
    {
        return view('livewire.users.user-component');
    }
}
