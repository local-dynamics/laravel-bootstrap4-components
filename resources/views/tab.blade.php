@php
    $active = $tabHelper->active;
    $tabHelper->active = false;
@endphp
<div class="
        tab-pane
        @if($active ?? false) show active @endif
        {{ $class ?? '' }}
     "
     id="{{ $key }}"
     role="tabpanel"
     aria-labelledby="{{ $key }}-tab"
     @isset($style) style="{{ $style }}" @endisset
>
    {{ $slot }}
</div>