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
        @isset($id) id="{{ $id }}" @endisset>
    @if(($addCsrf ?? true) && $method != 'GET') {{ csrf_field() }} @endif
    @istrue($methodOverwrite) {{ method_field($methodOverwrite) }} @endistrue
    {{ $slot }}
</form>