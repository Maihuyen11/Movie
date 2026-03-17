<?php

use Illuminate\Support\Facades\Route;

Route::get('/baoyen', function () {
    return view('welcome');
});

// Route for TestController@test
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);

Route::get('/buimaihuyen', function () {
    return 'Bùi Mai Huyền';
});
