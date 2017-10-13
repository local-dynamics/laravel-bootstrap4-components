<div class="block-group container-fluid rounded {{ $class ?? '' }} {{ $lWidth ?? 'l-250' }}"
     @isset($id) id="{{ $id }}" @endisset
>
    {{ $slot }}
</div>