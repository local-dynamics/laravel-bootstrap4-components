<?php

if (! function_exists('incrementedInt')) {
    function incrementedInt()
    {
        static $integer = 0;

        return ++$integer;
    }
}
