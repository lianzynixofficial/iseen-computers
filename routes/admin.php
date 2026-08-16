<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\ContactMessageController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->name('login.store');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');


    Route::get('/messages', [ContactMessageController::class, 'index'])
    ->name('messages.index');

    Route::get('/messages/{contactMessage}', [ContactMessageController::class, 'show'])
        ->name('messages.show');

    Route::patch('/messages/{contactMessage}/status', [ContactMessageController::class, 'update'])
        ->name('messages.update');

    Route::delete('/messages/{contactMessage}', [ContactMessageController::class, 'destroy'])
        ->name('messages.destroy');
});
