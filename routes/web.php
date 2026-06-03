<?php

use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ChirpController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::post('/chirps', [\App\Http\Controllers\ChirpController::class, 'store']);
    Route::get('/chirps/{chirp}/edit', [\App\Http\Controllers\ChirpController::class, 'edit']);
    Route::put('/chirps/{chirp}', [\App\Http\Controllers\ChirpController::class, 'update']);
    Route::delete('/chirps/{chirp}', [\App\Http\Controllers\ChirpController::class, 'destroy']);
});


//REGISTER ROUTES
Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');
Route::post('/register', Register::class)
    ->middleware('guest');


// Login routes
Route::view('/login', 'auth.login')
    ->middleware('guest')
    ->name('login');

Route::post('/login', Login::class)
    ->middleware('guest');

// Logout route
Route::post('/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');
