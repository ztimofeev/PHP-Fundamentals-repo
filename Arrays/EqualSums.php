<?php
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);
$nums = array_map('intval', $nums);

$searchedIndex = -1;

if (count($nums) == 1) {
    $searchedIndex = 0;
}

for ($i = 0; $i < count($nums); $i++) {
    $leftSum = 0;
    $rightSum = 0;
    for ($j = 0; $j < $i; $j++) {
        $leftSum += $nums[$j];
    }
    for ($j = count($nums) - 1; $j > $i; $j--) {
        $rightSum += $nums[$j];
    }
    if ($leftSum == $rightSum){
        $searchedIndex = $i;
        break;
    }
}

if ($searchedIndex > -1){
    echo $searchedIndex;
} else {
    echo "no";
}

