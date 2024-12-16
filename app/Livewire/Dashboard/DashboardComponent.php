<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\View\View as ViewView;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render(): Factory|Application|View|ViewView
    {
        return view('livewire.dashboard.dashboard-component');
    }
}
