
public function chitiet($id) {
    $sach = DB::select("select * from sach where id = ?", [$id]);
    
    if (count($sach) > 0) {
        return view("sach.chitiet", ['sach' => $sach[0]]);
    }
    return redirect('/sach');
}