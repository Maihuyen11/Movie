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
<<<<<<< HEAD
=======

Route::get('/phamlebichhop', function () {
    return 'Phạm Lê Bích Hợp';
});


>>>>>>> fc3e7e024804a34844b30b557bd0dc25007d53db
// Route hiển thị phim hành động
Route::get('/action', [App\Http\Controllers\MovieController::class, 'phimHanhDong']);
use App\Http\Controllers\MovieController;

Route::get('/phim_doanh_thu_cao_nhat', [MovieController::class, 'phimDoanhThuCaoNhat']);
<<<<<<< HEAD
=======

Route::get('/the-loai-phim', [MovieController::class, 'showGenres']);

Route::get('/canada-movies', [MovieController::class, 'phimCanada']);

Route::get('/phim-tren-120-phut', [MovieController::class, 'phimThoiLuongDai']);

Route::get('/top-movies', [MovieController::class, 'topMovies']);

>>>>>>> fc3e7e024804a34844b30b557bd0dc25007d53db
