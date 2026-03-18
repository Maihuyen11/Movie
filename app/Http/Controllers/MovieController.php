<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function runtimeOver120()
    {
        $movies = DB::table('movie')
            ->select('movie_name', 'release_date', 'runtime')
            ->where('runtime', '>', 120)
            ->limit(10)
            ->get();

        return view('runtime_over_120', compact('movies'));
    }
}