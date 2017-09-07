<?php
$input = trim(fgets(STDIN));
$nums = explode(', ', $input);
$nums = array_map('floatval', $nums);

$finalTickness = $nums[0];
for ($i = 1; $i < count($nums); $i++) {
    $currentCrystal = $nums[$i];
    cristalProcessing($finalTickness, $currentCrystal);
}

function cristalProcessing($endThickness, $rawCrystal) {

    echo "Processing chunk $rawCrystal microns" . "\n";

    $isNotReady = true;
    $counter = 0;

    while ($isNotReady) {
        if ($rawCrystal >= 4 * $endThickness) {
            $counter++;
            $rawCrystal /= 4;
        } else {
            if ($counter > 0) {
                echo "Cut x$counter\n";
                $rawCrystal = transportAndWashing($rawCrystal);
            }
            $isNotReady = false;
        }
    }

    $isNotReady = true;
    $counter = 0;

    while($isNotReady) {

        if (($rawCrystal -  $rawCrystal * 0.2 )>= $endThickness) {
            $counter++;
            $rawCrystal -= $rawCrystal * 0.2;
        } else {
            if ($counter > 0) {
                echo "Lap x$counter\n";
                $rawCrystal = transportAndWashing($rawCrystal);
            }
            $isNotReady = false;
        }
    }

    $isNotReady = true;
    $counter = 0;

    while($isNotReady) {
        if (($rawCrystal - $endThickness) >= 20) {
            $counter++;
            $rawCrystal -= 20;
        } else {
            if ($counter > 0) {
                echo "Grind x$counter\n";
                $rawCrystal = transportAndWashing($rawCrystal);
            }
            $isNotReady = false;
        }
    }

    $isNotReady = true;
    $counter = 0;

    while($isNotReady) {
        if ($rawCrystal > $endThickness) {
            $counter++;
            $rawCrystal -= 2;
        } else {
            if ($counter > 0) {
                echo "Etch x$counter\n";
                $rawCrystal = transportAndWashing($rawCrystal);
            }
            $isNotReady = false;
        }
    }

    if (($endThickness - $rawCrystal) == 1) {
        $rawCrystal++;
        echo "X-ray x1\n";
    }

    echo "Finished crystal $rawCrystal microns\n";
}

function transportAndWashing($crystal) {
    echo "Transporting and washing\n";
    return floor($crystal);
}