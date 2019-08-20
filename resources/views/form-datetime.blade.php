<?php
$id = $id ?? 'input-date-' . incrementedInt();
$format = $format ?? 'YYYY-MM-DD HH:mm:ss';
$placeholder = $placeholder ?? $format;
?>
<div class="input-group {{ $groupClass ?? '' }}" @isset($groupStyle) style="{{ $groupStyle }}" @endisset>
    <div class="input-group-prepend">
        <span class="input-group-text" id="{{ $id }}-addon1"><i class="far fa-clock"></i></span>
    </div>
    <input class="form-control {{ $class ?? '' }}"
           value="{{ $slot ?? '' }}"
           id="{{ $id }}"
           aria-describedby="{{ $id }}-addon1"
           placeholder="{{ $placeholder }}"
           @isset($type) type="{{ $type }}" @endisset
           @isset($name) name="{{ $name }}" @endisset
           @isset($style) style="{{ $style }}" @endisset
    >
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="{{ $id }}-addon2" onclick="$('#{{ $id}}').val('');"><i class="far fa-times"></i></button>
    </div>
</div>
<script>
(function () {
  var config = {
    "singleDatePicker": true,
    "showDropdowns": true,
    "showISOWeekNumbers": true,
    "showCustomRangeLabel": false,
    "autoUpdateInput": true,
    "autoApply": true,
    "timePicker": true,
    "timePicker24Hour": true,
@isset($startDate)    "startDate": "{{$startDate}}",@endisset
@isset($endDate)    "endDate": "{{$endDate}}",@endisset
@isset($minDate)    "minDate": "{{$minDate}}",@endisset
@isset($maxDate)    "maxDate": "{{$maxDate}}",@endisset
    "locale": {
      "format": "{{$format}}",
      "separator": " - ",
      "applyLabel": "Ok",
      "cancelLabel": "Abbrechen",
      "fromLabel": "Von",
      "toLabel": "Bis",
      "customRangeLabel": "Custom",
      "weekLabel": "W",
      "daysOfWeek": [
        "So",
        "Mo",
        "Di",
        "Mi",
        "Do",
        "Fr",
        "Sa"
      ]
    }
  };

  try {
    var $input = $('#{{$id}}');
    $input.daterangepicker(config);
    $input.on('apply.daterangepicker', function(ev, picker) {
      $input.val(picker.startDate.format('{{ $format }}'));
    });
  } catch (e) {
    document.addEventListener("DOMContentLoaded", function () {
      var $input = $('#{{$id}}');
      $input.daterangepicker(config);
      $input.on('apply.daterangepicker', function(ev, picker) {
        $input.val(picker.startDate.format('{{ $format }}'));
      });
    });
  }
})();
</script>
