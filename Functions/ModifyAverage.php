<?php
$input = trim(fgets(STDIN));
$nums = str_split($input);

function getAverage($arr) {
    return array_sum($arr) / count($arr);
}

while (true) {
    $avr = getAverage($nums);
    if ($avr <= 5) {
        $nums[] = 9;
    } else {
        echo implode('', $nums);
        break;
    }
}
