<?php
$input = 3.22;

if (is_numeric($input)) {
    if (intval($input) == $input) {
        $input = intval($input);
        var_dump($input);
    } else {
        $input = floatval($input);
        var_dump($input);
    }
} else {
    echo gettype($input);
}