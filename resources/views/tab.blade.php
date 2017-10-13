@php
    $active = $tabHelper->active;
    $tabHelper->active = false;
@endphp
<div class="tab-pane @if($active ?? false) show active @endif"
     id="{{ $key }}"
     role="tabpanel"
     aria-labelledby="{{ $key }}-tab">
    {{ $slot }}
</div>