@php
    $id = $id ?? 'bsComp_chkbx_' . mt_rand(0,10000);
@endphp
<div class="custom-control custom-checkbox">
    <input class="custom-control-input"
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