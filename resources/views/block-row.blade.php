@php
    if (isset($labelTooltip) == false && strlen($label ?? '') > 20) {
        $labelTooltip = $label ?? '';
    }
    if(isset($labelTop) == false) {
        $labelTop = false;
    }
    if($labelTop) {
        $labelStyle = '';
    } else {
        $labelStyle = 'align-items-center';
    }
@endphp
<div class="block-row row d-flex {{ $class ?? '' }}"
     @isset($id) id="{{ $id }}" @endisset
     @isset($style) style="{{ $style }}" @endisset
>
    <div class="block-left d-flex px-2 py-1 {{ $labelStyle }}">
        <div class="text-truncate @isset($labelTooltip) jqtt @endisset"
             @isset($labelTooltip) title="{{ $labelTooltip }}" data-toggle="tooltip" data-placement="top" @endisset
        >
            {!! $label ?? '' !!}
        </div>
    </div>
    <div class="block-right col d-flex align-items-center px-2 py-1">
        <span>{{ $slot }}</span>
    </div>
</div>
