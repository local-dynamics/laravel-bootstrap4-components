<span class="
        badge
        badge-{{ $type }}
        {{ $class or '' }}
        @istrue($pill, 'badge-pill')
     "
      @isset($style) style="{{ $style }}" @endisset
>
    {{ $slot }}
</span>