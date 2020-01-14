@php
    $id = $id ?? 'tabs-' . mt_rand(0, 9999999999);
@endphp
<div class="card card-tabs-vertical {{ $class ?? '' }}" id="{{ $id }}"
     @isset($style) style="{{ $style }}" @endisset
>
    <div class="row no-gutters">
        <div class="col-2 card-header-vertical">
            <ul class="nav flex-column nav-pills" role="tablist">
                @foreach($tabs as $tabId => $tabLabel)
                    <li class="nav-item">
                        <a class="nav-link @if($loop->first) active @endif"
                           id="{{ $tabId }}-tab"
                           data-toggle="pill"
                           href="#{{ $tabId }}"
                           role="tab"
                           aria-controls="{{ $tabId }}"
                           aria-expanded="true"
                        >{!! $tabLabel !!}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-10 px-3 {{ $bodyClass ?? '' }} tab-content card-body">
            {{ $slot }}
        </div>
    </div>
</div>
<script>
(function () {
    var tabs = document.querySelectorAll('#{{ $id }} .tab-pane:not(:first-child)')
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('active')
        tabs[i].classList.remove('show')
    }
})()
</script>
