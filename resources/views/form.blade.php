@php
    $method = strtoupper($method ?? 'POST');
    $methodOverwrite = false;
    if (!in_array($method, ['GET', 'POST'])) {
        $methodOverwrite = $method;
        $method = 'POST';
    }
@endphp
<form
        method="{{ $method }}"
        action="{{ $action ?? '' }}"
        @isset($id) id="{{ $id }}" @endisset
        @isset($class) class="{{ $class }}" @endisset
        @isset($style) style="{{ $style }}" @endisset
        @isset($fileUpload) enctype="multipart/form-data" @endisset
>
    @if(($addCsrf ?? true) && $method != 'GET') {{ csrf_field() }} @endif
    @if($methodOverwrite) {{ method_field($methodOverwrite) }} @endif
    {{ $slot }}
</form>
