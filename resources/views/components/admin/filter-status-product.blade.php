<div>
    @foreach ($status as $item)
        @php
            $cur = $currentStatus === (string)$item['status'] ? 'btn-dark' : 'btn-info';
            switch ($item['status']) {
                case '0':
                    $name = 'Chưa kích hoạt';
                    break;
                case '1':
                    $name = 'Kích hoạt';
                    break;
                default:
                    $name = 'Tất cả';
                    break;
            }
        @endphp
        <a href="{{ route('admin.products.index', ['filter-status' => $item['status']]) }}"
            class="btn {{ $cur }}">{{ $name }}
            <span class="badge badge-pill badge-light">{{ $item['count'] }}</span>
        </a>
    @endforeach
</div>
