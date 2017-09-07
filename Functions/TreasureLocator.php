<?php
$inputLine = trim(fgets(STDIN));
$coordinates = explode(', ', $inputLine);
$coordinates = array_map('floatval', $coordinates);

function getLocation($x, $y) {
    if (($x >= 1 && $x <= 3) && ($y >= 1 && $y <= 3)) {
        return "Tuvalu";
    } elseif (($x >= 8 && $x <= 9) && ($y >= 0 && $y <= 1)) {
        return "Tokelau";
    } elseif (($x >= 5 && $x <= 7) && ($y >= 3 && $y <= 6)) {
        return "Samoa";
    } elseif (($x >= 0 && $x <= 2) && ($y >= 6 && $y <= 8)) {
        return "Tonga";
    } elseif (($x >= 4 && $x <= 9) && ($y >= 7 && $y <= 8)) {
        return "Cook";
    } else {
        return "On the bottom of the ocean";
    }
}

for ($i = 0; $i < count($coordinates); $i += 2) {
    $coorX = $coordinates[$i];
    $coorY = $coordinates[$i + 1];
    echo getLocation($coorX, $coorY) . "\n";
}