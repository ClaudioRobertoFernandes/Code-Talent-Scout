<?php

namespace App\Livewire\Dashboard;

use App\Models\GitHub\GitHubProfile;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View as ViewView;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardComponent extends Component
{
    use WithPagination;
    public int $countUsers = 0;
    public int $countRepos = 0;
    public $publicRepos;
    public string $nameCountRepos = '';
    public int $countFollowers = 0;

    public $followers;
    public string $nameCountFollowers = '';
    public $following;
    public int $countFollowings = 0;
    public string $nameCountFollowings = '';
    public function render(): Factory|Application|View|ViewView
    {
        $searchedUsers = GitHubProfile::where('user_id', auth()->id())->get();

        $this->countUsers = $searchedUsers->count();
        $this->publicRepos = GitHubProfile::where('user_id', auth()->id())->orderBy('publicRepos', 'DESC')->first();
        $this->countRepos = $this->publicRepos->publicRepos;
        $this->nameCountRepos = $this->publicRepos->login;

        $this->followers =GitHubProfile::where('user_id', auth()->id())->orderBy('followers', 'DESC')->first();
        $this->countFollowers = $this->followers->followers;
        $this->nameCountFollowers = $this->followers->login;

        $this->following = GitHubProfile::where('user_id', auth()->id())->orderBy('following', 'DESC')->first();
        $this->countFollowings = $this->following->following;
        $this->nameCountFollowings = $this->following->login;





        return view('livewire.dashboard.dashboard-component');
    }
}
