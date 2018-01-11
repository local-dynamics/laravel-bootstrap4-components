<?php
$id = $id ?? 'input-date-' . mt_rand(10000000000, 99999999999);
$format = $format ?? 'YYYY-MM-DD HH:mm:ss';
$placeholder = $placeholder ?? $format;
?>
<div class="input-group">
    <span class="input-group-addon" id="{{ $id }}-addon1"><span class="glyphicons glyphicons-clock"></span></span>
    <input class="form-control {{ $class ?? '' }}"
           value="{{ $slot ?? '' }}"
           id="{{ $id }}"
           aria-describedby="{{ $id }}-addon1"
           placeholder="{{ $placeholder }}"
           @isset($type) type="{{ $type }}" @endisset
           @isset($name) name="{{ $name }}" @endisset
           @isset($style) style="{{ $style }}" @endisset
    >
</div>
<script>
    (function() {
        var config = {
            "singleDatePicker":                true,
            "showDropdowns":                   true,
            "showISOWeekNumbers":              true,
            "showCustomRangeLabel":            false,
            "autoUpdateInput":                 false,
            "autoApply":                       true,
            "timePicker":                      true,
            "timePicker24Hour":                true,
            @isset($startDate)"startDate":     "{{$startDate}}", @endisset
            @isset($endDate)"endDate": "{{$endDate}}", @endisset
            "locale":                          {
                "format":           "{{$format}}",
                "separator":        " - ",
                "applyLabel":       "Ok",
                "cancelLabel":      "Abbrechen",
                "fromLabel":        "Von",
                "toLabel":          "Bis",
                "customRangeLabel": "Custom",
                "weekLabel":        "W",
                "daysOfWeek":       [
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
            document.addEventListener("DOMContentLoaded", function() {
                var $input = $('#{{$id}}');
                $input.daterangepicker(config);
                $input.on('apply.daterangepicker', function(ev, picker) {
                    $input.val(picker.startDate.format('{{ $format }}'));
                });
            });
        }
    })();
</script>