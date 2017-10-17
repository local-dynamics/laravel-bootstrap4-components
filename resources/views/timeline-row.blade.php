<div class="row {{ $class ?? '' }}"
     @isset($id) id="{{ $id }}" @endisset
     @isset($style) style="{{ $style }}" @endisset
>
    <div class="col">
        <div class="icon">
            <div class="icon-content">{{ $icon ?? '' }}</div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $title ?? '' }}</h5>
                <p class="card-text timeline-pre">{{ $slot }}</p>
                <p class="card-text text-muted mt-1"><i>am</i> {{ $time ?? '' }} von {{ $author ?? '' }}</p>
            </div>
        </div>
    </div>
</div>