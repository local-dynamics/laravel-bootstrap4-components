<div class="row {{ $class ?? '' }}"
     @isset($id) id="{{ $id }}" @endisset
     @isset($style) style="{{ $style }}" @endisset
>
    <div class="col">
        <div class="icon">
            <div class="icon-content">{!! $icon ?? '' !!}</div>
        </div>
        <div class="card {{ $cardClass ?? '' }}">
            <div class="card-body">
                <h5 class="card-title">
                    {!! $title ?? '' !!}
                    <small class="text-muted">
                        <i>am</i> {{ $time ?? '' }} von {!! $author ?? '' !!}
                    </small>
                </h5>
                <p class="card-text timeline-pre">{{ $slot }}</p>
            </div>
        </div>
    </div>
</div>