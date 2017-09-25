<?php
$largest_number = intval(fgets(STDIN));
$second_number = intval(fgets(STDIN));
$third_number = intval(fgets(STDIN));

if ($second_number > $largest_number) {
    $largest_number = $second_number;
}

if ($third_number > $largest_number) {
    $largest_number = $third_number;
}

echo 'Max: ' . $largest_number;