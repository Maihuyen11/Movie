<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; 
use App\Http\Controllers\LayOutController;

Route::get('/baoyen', function () {
    return 'Bảo Yến'; 
});

// Route for TestController@test
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);

Route::get('/buimaihuyen', function () {
    return 'Bùi Mai Huyền';
});

Route::get('/the-loai-phim', [MovieController::class, 'showGenres']);

Route::get('/hop/canada-movies', function () {
    $movies = DB::table('movie')->where('country_name', 'Canada')->get();
    return view('canada_movies', ['movies' => $movies]);
});

Route::get('/phim-tren-120-phut', [MovieController::class, 'phimThoiLuongDai']);

Route::get('/top-movies', [MovieController::class, 'topMovies']);

// 1. Trang mặc định hiển thị 8 cuốn sách rẻ nhất
Route::get('/sach', [LayOutController::class, 'sach']);

// 2. Trang hiển thị sách theo thể loại khi bấm Menu 
Route::get('/sach/theloai/{id}', [LayOutController::class, 'theloai']);

// 3. Trang xem chi tiết 
Route::get('/sach/chitiet/{id}', [LayOutController::class, 'chitiet']);

