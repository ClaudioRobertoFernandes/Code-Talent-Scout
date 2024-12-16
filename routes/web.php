<?php

use App\Livewire\Dashboard\DashboardComponent;
use App\Livewire\TestComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');

    Route::get('/test', TestComponent::class)->name('test');

    Route::get('/test-new-layout', function () {
        return view('welcome2');
    })->name('test-new-layout');
});
