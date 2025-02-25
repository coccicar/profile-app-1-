<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfileController::class, 'getAllProfiles']);

Route::get('/profile/{id}', [ProfileController::class, 'getProfile']);
