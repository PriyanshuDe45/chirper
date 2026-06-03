 <?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ChirpController::class, 'index']);
Route::post('/chirps', [\App\Http\Controllers\ChirpController::class, 'store']);
Route::get('/chirps/{chirp}/edit', [\App\Http\Controllers\ChirpController::class, 'edit']);
Route::put('/chirps/{chirp}', [\App\Http\Controllers\ChirpController::class, 'update']);
Route::delete('/chirps/{chirp}', [\App\Http\Controllers\ChirpController::class, 'destroy']);
