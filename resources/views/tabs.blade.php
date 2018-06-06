<div class="card card-tabs {{ $class ?? '' }}"
     @isset($id) id="{{ $id }}" @endisset
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

@php
    // Reset tabHelper
    $tabHelper->active = true;
@endphp
