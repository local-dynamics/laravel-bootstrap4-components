<div class="timeline-group {{ $class ?? '' }}"
     @isset($id) id="{{ $id }}" @endisset
     @isset($style) style="{{ $style }}" @endisset
>
    <div class="line text-muted"></div>
    {!! $slot !!}
</div>