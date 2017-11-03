<input class="form-control {{ $class ?? '' }}"
       value="{{ $slot ?? '' }}"
       @isset($type) type="{{ $type }}" @endisset
       @isset($id) id="{{ $id }}" @endisset
       @isset($name) name="{{ $name }}" @endisset
       @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
       @isset($style) style="{{ $style }}" @endisset
>