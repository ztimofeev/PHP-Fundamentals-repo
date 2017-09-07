<?php
$input = trim(fgets(STDIN));
$nums = explode(', ', $input);
$nums = array_map('floatval', $nums);

$x1 = $nums[0];
$y1 = $nums[1];
$x2 = $nums[2];
$y2 = $nums[3];

echo getValidation($x1, $y1, 0, 0) . "\n";
echo getValidation($x2, $y2, 0, 0) . "\n";
echo getValidation($x1, $y1, $x2, $y2);

function getValidation($x1, $y1, $x2, $y2) {
    $x = ($x1 - $x2) * ($x1 - $x2);
    $y = ($y1 - $y2) * ($y1 - $y2);
    $distance = sqrt($x + $y);

    if ($distance == intval($distance)) {
        return '{' . $x1 . ', ' . $y1 . '} to {' . $x2 . ', ' . $y2 . '} is valid';
    } else {
        return '{' . $x1 . ', ' . $y1 . '} to {' . $x2 . ', ' . $y2 . '} is invalid';
    }
}
