 <?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ChirpController::class, 'index']);
Route::post('/chirps', [\App\Http\Controllers\ChirpController::class, 'store']);

