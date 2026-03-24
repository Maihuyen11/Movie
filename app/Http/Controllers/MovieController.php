<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // Yêu cầu 7.2: Hàm lấy 10 phim điểm cao nhất
    public function topMovies()
    {
        $movies = DB::table('movie')
            ->orderBy('vote_average', 'desc')
            ->limit(10)
            ->get();

        return view('top_movies', compact('movies'));
    }
}