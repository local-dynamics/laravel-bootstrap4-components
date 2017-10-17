<div class="separator text-muted {{ $class ?? '' }}"
     @isset($id) id="{{ $id }}" @endisset
     @isset($style) style="{{ $style }}" @endisset
>
    <time>{{ $slot }}</time>
</div>