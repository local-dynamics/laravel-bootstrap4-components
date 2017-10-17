<label class="custom-control custom-checkbox">
    <input class="custom-control-input {{ $class ?? '' }}"
           type="checkbox"
           value="{{ empty(trim($slot)) ? '1': trim($slot) }}"
           @isset($id) id="{{ $id }}" @endisset
           @isset($name) name="{{ $name }}" @endisset
           @istrue($checked) checked="checked" @endistrue
           @isset($style) style="{{ $style }}" @endisset
    >
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">{{ $label ?? '' }}</span>
</label>