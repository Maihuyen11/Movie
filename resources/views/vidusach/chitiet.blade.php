<x-book-layout>
    
    {{-- Khai báo biến title cho component --}}
    <x-slot name="title">
        Chi tiết cuốn sách
    </x-slot>

    {{-- Bắt đầu phần nội dung ($slot) --}}
    <h4 class="mb-4" style="color: #ff5850; font-weight: bold;">{{ $sach->tieu_de }}</h4>

    <div class="row">
        
        {{-- Cột trái chứa ảnh --}}
        <div class="col-md-4 text-center">
            <img src="{{ $sach->link_anh_bia }}" alt="Bìa sách" style="max-width: 100%; border: 1px solid #ddd; padding: 5px; border-radius: 5px;">
        </div>

        {{-- Cột phải chứa thông tin --}}
        <div class="col-md-8">
            <p><b>Nhà cung cấp:</b> {{ $sach->nha_cung_cap ?? 'Đang cập nhật' }}</p>
            <p><b>Nhà xuất bản:</b> {{ $sach->nha_xuat_ban ?? 'Đang cập nhật' }}</p>
            <p><b>Tác giả:</b> {{ $sach->tac_gia ?? 'Đang cập nhật' }}</p>
            <p><b>Hình thức bìa:</b> {{ $sach->hinh_thuc_bia ?? 'Đang cập nhật' }}</p>
            <p><b>Giá bán:</b> <span class="text-danger font-weight-bold">{{ number_format($sach->gia_ban, 0, ",", ".") }}đ</span></p>
        </div>
        
    </div>

    {{-- Phần mô tả bên dưới --}}
    <div class="mt-4">
        <h6 style="font-weight: bold;">Mô tả:</h6>
        <p class="text-justify" style="line-height: 1.6;">
            {{ $sach->mo_ta ?: 'Đang cập nhật nội dung mô tả cho cuốn sách này...' }}
        </p>
    </div>

</x-book-layout>