<form action="{{ url('tinh-tuoi') }}" method="post">
    Nhập năm sinh của bạn: 
    <input type="text" name="nam_sinh">
    <br>
    <input type="submit" value="Tính kết quả">
    
    {{ csrf_field() }} 
</form>