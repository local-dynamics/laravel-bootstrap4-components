@php
$id = $id ?? 'tabs-' . mt_rand(0, 9999999999);
@endphp
<div class="card card-tabs {{ $class ?? '' }}" id="{{ $id }}"
     @isset($style) style="{{ $style }}" @endisset
>
    <div class="card-header ">
        <ul class="nav nav-tabs card-header-tabs" role="tablist">
            @foreach($tabs as $tabId => $tabLabel)
                <li class="nav-item">
                    <a class="nav-link @if($loop->first) active @endif"
                       id="{{ $tabId }}-tab"
                       data-toggle="tab"
                       href="#{{ $tabId }}"
                       role="tab"
                       aria-controls="{{ $tabId }}"
                       aria-expanded="true"
                    >{!! $tabLabel !!}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="tab-content card-body {{ $bodyClass ?? '' }}">
        {{ $slot }}
    </div>
</div>
<script>
    (function() {
        var tabs = document.querySelectorAll('#{{ $id }} .tab-pane:not(:first-child)');
        for(var i = 0; i < tabs.length; i++) {
            tabs[i].classList.remove('active');
            tabs[i].classList.remove('show');
        }
    })();
</script>
