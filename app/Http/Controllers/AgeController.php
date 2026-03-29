<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index()
    {
        return view('tinhtuoi'); 
    }

    public function calculate(Request $request)
    {
        $nam_sinh = $request->input("nam_sinh"); 
        
        $nam_hien_tai = 2026; 
        $tuoi = $nam_hien_tai - $nam_sinh;

        return "Tuổi của bạn là: " . $tuoi;
    }
}