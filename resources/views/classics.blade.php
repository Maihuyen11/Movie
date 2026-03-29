<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Tác phẩm kinh điển</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { text-align: center; color: #333; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        .book-cover {
            width: 80px;
            height: auto;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <h2>Danh mục sách: Tác phẩm kinh điển</h2>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Nhà xuất bản</th>
                <th>Tác giả</th>
                <th>Giá bán</th>
                <th>Hình ảnh</th>
            </tr>
        </thead>
        <tbody>
            @if(count($books) > 0)
                @foreach($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book->tieu_de }}</td>
                    <td>{{ $book->nha_xuat_ban }}</td>
                    <td>{{ $book->tac_gia }}</td>
                    
                    <td>{{ number_format($book->gia_ban, 0, ',', '.') }} VNĐ</td>
                    
                    <td>
                        <img src="{{ $book->link_anh_bia }}" alt="{{ $book->tieu_de }}" class="book-cover">
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">Hiện chưa có sách nào thuộc thể loại này.</td>
                </tr>
            @endif
        </tbody>
    </table>

</body>
</html>