<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')
    ->middleware(['auth']);

Route::view('dashboard', 'index')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
