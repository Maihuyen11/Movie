<?php

use Illuminate\Support\Facades\Route;


Route::get('/baoyen', function () {
    return 'Bảo Yến'; 
});
Route::get('/buimaihuyen', function () {
    return 'Bùi Mai Huyền';
});


Route::get('/test', [TestController::class, 'test']);

Route::get('/Dinhcuong', function () {
    return 'Dinh Cuong';
});

Route::get('/tranvothuhung', function () {
    return 'Trần Võ Thu Hưng';
});

Route::get('/truongthicamhong', function () {
    return 'Trương Thị Cẩm Hồng';
});



// Route hiển thị phim hành động
Route::get('/action', [App\Http\Controllers\MovieController::class, 'phimHanhDong']);
use App\Http\Controllers\MovieController;

Route::get('/phim_doanh_thu_cao_nhat', [MovieController::class, 'phimDoanhThuCaoNhat']);

Route::get('/the-loai-phim', [MovieController::class, 'showGenres']);

Route::get('/hop/canada-movies', function () {
    $movies = DB::table('movie')->where('country_name', 'Canada')->get();
    return view('canada_movies', ['movies' => $movies]);
});

Route::get('/phim-tren-120-phut', [MovieController::class, 'phimThoiLuongDai']);

Route::get('/top-movies', [MovieController::class, 'topMovies']);

