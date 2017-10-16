<div
        class="
            alert alert-{{ $type ?? 'info' }}
            {{ $class ?? '' }}
            @istrue($dismissible, 'alert-dismissible')
            @istrue($animate, 'fade show')
         "
        role="alert"
        @isset($id) id="{{ $id }}" @endisset
>
    @istrue($dismissible)
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    @endistrue

    {{ $slot }}
</div>