<?php
declare(strict_types=1);

$firstString = trim(fgets(STDIN));
$secondString = trim(fgets(STDIN));

$firstLine = explode(" ", $firstString);
$secondLine = explode(" ", $secondString);
$minLen = min(count($firstLine), count($secondLine));

$leftCounter = 0;
$rightCounter = 0;

for ($i = 0; $i < $minLen; $i++){
    if ($firstLine[$i] == $secondLine[$i]){
        $leftCounter++;
    } else {
        break;
    }
}

$firstLine = array_reverse($firstLine);
$secondLine = array_reverse($secondLine);
for ($i = 0; $i < $minLen; $i++){
    if ($firstLine[$i] == $secondLine[$i]){
        $rightCounter++;
    } else {
        break;
    }
}

if ($leftCounter >= $rightCounter){
    echo $leftCounter;
} elseif ($leftCounter < $rightCounter){
    echo $rightCounter;
}