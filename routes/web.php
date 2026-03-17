<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/baoyen', function () {
    return view('welcome');
});

// Route for TestController@test
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);

Route::get('/buimaihuyen', function () {
    return 'Bùi Mai Huyền';
});

Route::get('/runtime-over-120', [MovieController::class, 'runtimeOver120']);