<select class="form-control custom-select {{ $class ?? '' }}"
        @isset($id) id="{{ $id }}" @endisset
        @isset($name) name="{{ $name }}" @endisset
        @isset($style) style="{{ $style }}" @endisset
>
    @isset($placeholder)
        <option value="">{{ $placeholder }}</option>
    @endisset

    @foreach($options as $value => $label)
        <option value="{{ $value }}"
                @if($value == (string)$slot) selected @endif
        >{{ $label }}</option>
    @endforeach
</select>