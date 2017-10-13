<div class="block-row row rounded {{ $class ?? '' }}"
     @isset($id) id="{{ $id }}" @endisset
>
    <div class="block-left d-flex align-items-center px-2 py-1">
        <div class="text-truncate"
             @isset ($labelTooltip)title="{{ $labelTooltip }}" @endisset
        >
            {{ $label ?? '' }}
        </div>
    </div>
    <div class="block-right col d-flex align-items-center px-2 py-1">
        {{ $slot }}
    </div>
</div>