<?php
$id = $id ?? 'input-date-' . rand(10000000000, 99999999999);
$format = $format ?? 'YYYY-MM-DD'
?>
<input class="form-control {{ $class ?? '' }}"
       value="{{ $slot ?? '' }}"
       @isset($type) type="{{ $type }}" @endisset
       @isset($id) id="{{ $id }}" @endisset
       @isset($name) name="{{ $name }}" @endisset
       @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
       @isset($style) style="{{ $style }}" @endisset
>
<script>
    (function() {
        var config =
                {
                    "singleDatePicker":                true,
                    "showDropdowns":                   true,
                    "showISOWeekNumbers":              true,
                    "showCustomRangeLabel":            false,
                    @isset($startDate)"startDate":     "{{$startDate}}", @endisset
                    @isset($endDate)"endDate":          "{{$endDate}}", @endisset
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
            $('#{{$id}}').daterangepicker(config);
        } catch (e) {
            document.addEventListener("DOMContentLoaded", function() {
                $('#{{$id}}').daterangepicker(config);
            });
        }
    })();
</script>
