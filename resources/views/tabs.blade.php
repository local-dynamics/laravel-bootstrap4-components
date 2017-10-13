<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" @if($id ?? false) id="{{ $id }}" @endif role="tablist">
            @foreach($tabs as $tabId => $tabLabel)
                <li class="nav-item">
                    <a class="nav-link @if($loop->first) active @endif"
                       id="{{ $tabId }}-tab"
                       data-toggle="tab"
                       href="#{{ $tabId }}"
                       role="tab"
                       aria-controls="{{ $tabId  }}"
                       aria-expanded="true">{{ $tabLabel }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="tab-content card-body" id="myTabContent">
        {!! $slot !!}
    </div>
</div>

@php
    $activeTab->active = true;
@endphp