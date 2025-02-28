<?php

use App\Livewire\{Dashboard\DashboardComponent,
    TestComponent,
    Users\Repository\UserRepositoryComponent,
    Users\Selection\SelectionUserComponent,
    Users\UserComponent};
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

    Route::prefix('user')->group(function () {
        Route::get('/index/{user}', UserComponent::class)->name('user.index');

        Route::get('/repo/{user}/{repo}', UserRepositoryComponent::class)->name('user.repo');

    });

    Route::get('/test-new-layout', function () {
        return view('welcome2');
    })->name('test-new-layout');
});
