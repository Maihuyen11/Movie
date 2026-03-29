<x-book-layout>

    {{-- Khai báo biến title cho component --}}
    <x-slot name="title">
        Danh mục sách
    </x-slot>

    {{-- Toàn bộ nội dung bên dưới sẽ tự động đổ vào biến $slot của layout --}}
    <h3 class="mb-4" style="color: #ff5850;">Danh mục sách</h3>
    
    <div class="list-book">
        
        @foreach($data as $row)
            <div class="book">
                
                {{-- Bắt đầu thẻ <a> bao quanh ảnh và tên sách --}}
                <a href="{{ url('sach/chitiet/' . $row->id) }}" style="text-decoration: none; color: inherit;">
                    
                    <div style="height: 220px; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                        <img src="{{ $row->link_anh_bia }}" alt="Bìa sách" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                    </div>
                    
                    <h6 class="font-weight-bold" style="font-size: 14px; min-height: 40px;">
                        {{ $row->tieu_de }}
                    </h6>
                    
                </a>
                {{-- Kết thúc thẻ <a> --}}
                
                <p class="text-danger font-italic mb-0" style="font-size: 16px;">
                    {{ number_format($row->gia_ban, 0, ",", ".") }}đ
                </p>
                
            </div>
        @endforeach
        
    </div>

</x-book-layout>