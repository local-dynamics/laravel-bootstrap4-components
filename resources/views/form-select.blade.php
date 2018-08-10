@php($attributes = array_merge(
    [
        'data-live-search'       => 'true',
        'data-select-all-text'   => 'alle auswählen',
        'data-deselect-all-text' => 'alle abwählen',
    ],
    $attributes ?? []
))
<select class="form-control custom-select selectpicker {{ $class ?? '' }}"
        @isset($id) id="{{ $id }}" @endisset
        @isset($name) name="{{ $name }}" @endisset
        @isset($style) style="{{ $style }}" @endisset
        data-live-search="true"
        data-deselect-all-text="alle abwählen"
        data-select-all-text="alle auswählen"
@foreach($attributes ?? [] as $attribute => $value) {{ $attribute }}="{{ $value }}" @endforeach
>
@isset($placeholder)
    <option value="">{{ $placeholder }}</option>
@endisset

@foreach($options as $value => $label)
    <option value="{{ $value }}" @if($value == (string)$slot) selected @endif>{{ $label }}</option>
@endforeach
</select>