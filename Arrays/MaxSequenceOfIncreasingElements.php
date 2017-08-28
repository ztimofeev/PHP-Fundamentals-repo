<?php
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);
$nums = array_map("intval", $nums);

$maxArr[] = $nums[0];
$currentArr[] = $nums[0];

$limit = count($nums);

for ($i = 1; $i < $limit; $i++) {
    if ($nums[$i] > $nums[$i - 1]) {

        $currentArr[] = $nums[$i];
        if (count($currentArr) > count($maxArr)) {
            $maxArr = $currentArr;
        }
    } else {
        $currentArr = [];
        $currentArr[] = $nums[$i];
    }
}
unset($limit);

echo implode(' ', $maxArr);