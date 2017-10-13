<textarea class="form-control {{ $class ?? '' }}"
          rows="{{ $rows ?? '3' }}"
          @isset($id) id="{{ $id }}" @endisset
          @isset($name) name="{{ $name }}" @endisset
          @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
>{{ $slot }}</textarea>