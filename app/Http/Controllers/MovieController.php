<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function phimThoiLuongDai()
    {
        // Truy vấn 10 bộ phim có runtime > 120 phút
        $movies = DB::table('movie') // Lưu ý: Thay 'movies' bằng tên bảng chứa dữ liệu phim thực tế trong database của bạn nếu khác
                    ->select('movie_name', 'release_date', 'runtime')
                    ->where('runtime', '>', 120)
                    ->limit(10)
                    ->get();

        // Trả về view và truyền biến $movies sang
        return view('phim_thoi_luong_dai', compact('movies'));
    }
}
