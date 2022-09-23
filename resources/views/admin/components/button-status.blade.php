<a href="{{ route("admin.{$model}.status", [Illuminate\Support\Str::singular($model) => $item]) }}"
    class="btn @if ($item->status === 0) btn-warning @else btn-primary @endif">
    @if ($item->status === 0)
        Chưa kích hoạt
    @else
        Kích hoạt
    @endif
</a>
