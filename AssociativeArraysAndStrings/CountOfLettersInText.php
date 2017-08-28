<?php
$text = trim(fgets(STDIN));
$text = strtoupper($text);
$len = strlen($text);
$letters = [];
for ($i = 0; $i < $len; $i++) {
    $ch = $text[$i];
    if (ord($ch) >= ord('A') && ord($ch) <= ord('Z')) {
        if (isset($letters[$ch])) {
            $letters[$ch]++;
        } else {
            $letters[$ch] = 1;
        }
    }
}

print_r($letters);