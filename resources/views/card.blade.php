<div
        class="
            card
            {{ $class ?? '' }}
        "
        @isset($id) id="{{ $id }}" @endisset
        @isset($style) style="{{ $style }}" @endisset
>
    @isset($header)
        <div class="card-header">{{ $header }}</div>
    @endisset

    <div class="card-body {{ $bodyClass ?? '' }}">
        @isset($title)
            <h4 class="card-title">{{ $title }}</h4>
        @endisset

        {{ $slot }}
    </div>

    @isset($footer)
        <div class="card-footer">{{ $footer }}</div>
    @endisset
</div>