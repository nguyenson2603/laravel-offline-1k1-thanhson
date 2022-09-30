<select class="custom-select" name="{{ $name }}">
    <option {{ $selected('default') }} value="default">Choose..</option>
    <option {{ $selected('0') }} value="0">Chưa kích hoạt</option>
    <option {{ $selected('1') }} value="1">Kích hoạt</option>
</select>