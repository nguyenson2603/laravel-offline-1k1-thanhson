<select class="custom-select" name="{{ $name }}" id="{{ $id }}">
    <option value="default">Choose...</option>
    @foreach ($values as $value)
        <option {{ $selected($value['id']) }} value="{{ $value['id'] }}">{{ $value['name'] }}</option>
    @endforeach
</select>
