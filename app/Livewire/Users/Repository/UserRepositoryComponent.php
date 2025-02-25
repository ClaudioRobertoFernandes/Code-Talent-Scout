<?php

namespace App\Livewire\Users\Repository;

use App\Models\GitHub\GitHubProfile;
use App\Models\GitHub\GitHubRepositories;
use App\Services\GitHubApi\UsersRepository\Repository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class UserRepositoryComponent extends Component
{
    public string $userName;
    public string $repoName;
    public GitHubProfile $gitHubProfile;
    public $gitHubRepository;
    public array $repository;
    public function mount($user, $repo): void
    {
        $this->userName = $user;
        $this->repoName = $repo;

        $this->repository = Repository::getRepository($user, $repo);

        $this->gitHubProfile = GitHubProfile::where('login', $user)->first();

        $this->gitHubRepository = GitHubRepositories::getRepositories($user, $repo);

    }

    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        return view('livewire.users.repository.user-repository-component');
    }
}
