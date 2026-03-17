<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; 

Route::get('/baoyen', function () {
    return 'Bảo Yến'; 
});

// Route for TestController@test
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);

Route::get('/buimaihuyen', function () {
    return 'Bùi Mai Huyền';
});

Route::get('/the-loai-phim', function () {
    
    $genres = DB::table('genre')->get(); 
    
    return view('genres', compact('genres')); 
});