@php
    $id = $id ?? 'bsComp_chkbx_' . incrementedInt();
@endphp
<div class="custom-control custom-checkbox">
    <input
            @isset($class)
            class="custom-control-input {{$class}}"
            @else
            class="custom-control-input"
            @endisset
            type="checkbox"
            id="{{ $id }}"
            value="{{ empty(trim($slot)) ? '1': trim($slot) }}"
            @isset($name)
            name="{{ $name }}"
            @endisset
            @if($checked ?? false)
            checked="checked"
            @endif
            @isset($style)
            style="{{ $style }}"
            @endisset
    >
    <label class="custom-control-label"
           for="{{ $id }}">{{ $label ?? '' }}</label>
</div>
