<?php

namespace App\Livewire\Dashboard;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View as ViewView;
use Livewire\Attributes\Session;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardComponent extends Component
{
    use WithPagination;

    public function render(): Factory|Application|View|ViewView
    {
        return view('livewire.dashboard.dashboard-component');
    }
}
