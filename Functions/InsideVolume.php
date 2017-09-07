<?php
$inputLine = trim(fgets(STDIN));
$coordinates = explode(', ', $inputLine);
$coordinates = array_map('floatval', $coordinates);

$len = count($coordinates);

function checkPointInArea($x, $y,$z) {
    if (($x >= 10 && $x <= 50) && ($y >= 20 && $y <= 80) && ($z >= 15 && $z <= 50)) {
        return 'inside';
    }
    return 'outside';
}

for ($i = 0; $i < $len; $i += 3) {
    $pointX = $coordinates[$i];
    $pointY = $coordinates[$i + 1];
    $pointZ = $coordinates[$i + 2];

    echo checkPointInArea($pointX, $pointY, $pointZ) . "\n";
}
?>