<?php
$input = trim(fgets(STDIN));

echo dayOfWeek($input);

function dayOfWeek($num){
    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    return $days[$num - 1];
}