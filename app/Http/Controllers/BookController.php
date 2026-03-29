<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    function laythongtintheloai()
    {
        $the_loai_sach = Category::all();
        return view("qlsach.the_loai",compact("the_loai_sach"));

    }
    function laythongtinsach()
    {
        $sach = Book::where("nha_xuat_ban","Văn Học")->get();
        return view("qlsach.thong_tin_sach",compact("sach"));
    }
    function themTheLoaiMoi()
    {
        $data = [
            ["id" => 4, "ten_the_loai" => "Trinh thám"],
            ["id" => 5, "ten_the_loai" => "Văn học"],
        ];
        DB::table("dm_the_loai")->insert($data);
        return "Đã thêm thể loại sách thành công vào cơ sở dữ liệu!";
    }
}
    






