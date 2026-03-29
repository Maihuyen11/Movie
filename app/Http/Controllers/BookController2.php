<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController2 extends Controller
{
    public function getClassicBooks()
    {
        $books = DB::table('sach')
            ->join('dm_the_loai', 'sach.the_loai', '=', 'dm_the_loai.id')
            ->where('dm_the_loai.ten_the_loai', 'Tác phẩm kinh điển')
            ->select('sach.*')
            ->get();
        
        return view('classics', compact('books'));
    }
}