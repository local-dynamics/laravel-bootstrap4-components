<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs"
            role="tablist"
            @isset($id) id="{{ $id }}" @endisset
        >
            @foreach($tabs as $tabId => $tabLabel)
                <li class="nav-item">
                    <a class="nav-link @if($loop->first) active @endif"
                       id="{{ $tabId }}-tab"
                       data-toggle="tab"
                       href="#{{ $tabId }}"
                       role="tab"
                       aria-controls="{{ $tabId }}"
                       aria-expanded="true"
                    >{{ $tabLabel }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="tab-content card-body" id="myTabContent">
        {{ $slot }}
    </div>
</div>

@php
    // Reset tabHelper
    $tabHelper->active = true;
@endphp