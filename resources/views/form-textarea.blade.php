<textarea class="form-control {{ $class ?? '' }}"
          rows="{{ $rows ?? '3' }}"
          @if($id ?? false) id="{{ $id }}" @endif
          @if($name ?? false) name="{{ $name }}" @endif
          @if($placeholder ?? false) placeholder="{{ $placeholder }}" @endif
>{{ $slot }}</textarea>