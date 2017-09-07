<?php
$input = trim(fgets(STDIN));
$nums = explode(', ', $input);
$nums = array_map('floatval', $nums);

$x1 = $nums[0];
$y1 = $nums[1];
$x2 = $nums[2];
$y2 = $nums[3];
$x3 = $nums[4];
$y3 = $nums[5];

$line1 = lineLenght($x1, $y1, $x2, $y2);
$line2 = lineLenght($x2, $y2, $x3, $y3);
$line3 = lineLenght($x3, $y3, $x1, $y1);

function lineLenght($x1, $y1, $x2, $y2) {
    $x = ($x1 - $x2) * ($x1 - $x2);
    $y = ($y1 - $y2) * ($y1 - $y2);
    return sqrt($x + $y);
}

$shorterTwoLines = $line1 + $line2;
$direction = '1->2->3';
if (($line2 + $line3) < $shorterTwoLines) {
    $shorterTwoLines = $line2 + $line3;
    $direction = '1->3->2';
}
if (($line3 + $line1) < $shorterTwoLines) {
    $shorterTwoLines = $line3 + $line1;
    $direction = '2->1->3';
}
echo "$direction: $shorterTwoLines";