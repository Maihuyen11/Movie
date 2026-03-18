<?php

use Illuminate\Support\Facades\Route;


Route::get('/baoyen', function () {
    return view('Bảo Yến');
});

// Route for TestController@test
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);

Route::get('/tranvothuhung', function () {
    return 'Trần Võ Thu Hưng';
});

Route::get('/truongthicamhong', function () {
    return 'Trương Thị Cẩm Hồng';
});


// Route hiển thị phim hành động
Route::get('/movies/action', [App\Http\Controllers\ActionMovieController::class, 'hanh_dong']);