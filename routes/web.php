<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB; 
use App\Http\Controllers\LayOutController;
=======

>>>>>>> Dinh-Cuong

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

Route::get('/phamlebichhop', function () {
    return 'Phạm Lê Bích Hợp';
});


// Route hiển thị phim hành động
Route::get('/action', [App\Http\Controllers\MovieController::class, 'phimHanhDong']);
use App\Http\Controllers\MovieController;

Route::get('/phim_doanh_thu_cao_nhat', [MovieController::class, 'phimDoanhThuCaoNhat']);

Route::get('/the-loai-phim', [MovieController::class, 'showGenres']);

Route::get('/canada-movies', [MovieController::class, 'phimCanada']);

Route::get('/phim-tren-120-phut', [MovieController::class, 'phimThoiLuongDai']);

Route::get('/top-movies', [MovieController::class, 'topMovies']);

<<<<<<< HEAD
// 1. Trang mặc định hiển thị 8 cuốn sách rẻ nhất
Route::get('/sach', [LayOutController::class, 'sach']);

// 2. Trang hiển thị sách theo thể loại khi bấm Menu 
Route::get('/sach/theloai/{id}', [LayOutController::class, 'theloai']);

// 3. Trang xem chi tiết 
Route::get('/sach/chitiet/{id}', [LayOutController::class, 'chitiet']);

