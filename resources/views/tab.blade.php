<div class="
        tab-pane
        show active
        {{ $class ?? '' }}
     "
     id="{{ $key }}"
     role="tabpanel"
     aria-labelledby="{{ $key }}-tab"
     @isset($style) style="{{ $style }}" @endisset
>
    {{ $slot }}
</div>
