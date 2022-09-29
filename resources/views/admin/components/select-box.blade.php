<div class="form-group">
    <label>{{ $title }}</label>
    <select class="custom-select" name="{{ $name }}">
        <option value="" selected>Choose..</option>
        @foreach ($options as $item)
            @php
                $selected = null;
                if (isset($value)) {
                    $selected = $value == $item['id'] ? 'selected' : '';
                }
            @endphp
            <option value="{{ $item['id'] }}" {{ $selected }}>{{ $item['name'] }}</option>
        @endforeach
    </select>
</div>
