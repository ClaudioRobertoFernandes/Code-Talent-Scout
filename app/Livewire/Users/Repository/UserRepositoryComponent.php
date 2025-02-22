<?php

namespace App\Livewire\Users\Repository;

use App\Models\GitHub\GitHubProfile;
use App\Services\GitHubApi\Repositories\RepoUser;
use App\Services\GitHubApi\UsersRepository\Repository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class UserRepositoryComponent extends Component
{
    public string $userName;
    public string $repoName;
    public GitHubProfile $gitHubProfile;
    public array $repository;
    public function mount($user, $repo): void
    {
        $this->userName = $user;
        $this->repoName = $repo;

        $this->repository = Repository::getRepository($user, $repo);

        $this->gitHubProfile = GitHubProfile::where('login', $user)->first();
    }

    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        return view('livewire.users.repository.user-repository-component');
    }
}
