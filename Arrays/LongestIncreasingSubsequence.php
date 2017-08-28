<?php
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);
$nums = array_map('intval', $nums);

$lis = [];
$result = [];
$lis[] = $nums[0];
$result[] = $nums[0];
$maxLen = 1;

for ($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] > $lis[count($lis) - 1]) {
        $lis[] = $nums[$i];
    } elseif ($nums[$i] < $lis[count($lis) - 1] && !in_array($nums[$i], $lis) && $nums[$i] >= 0) {
        $lis[] = $nums[$i];
        sort($lis);
        $index = array_search($nums[$i], $lis);
        $lis = array_slice($lis, 0, $index + 1);
    }

    if (count($lis) > $maxLen) {
        $maxLen = count($lis);
        $result = $lis;
    }
}

echo implode(' ', $result);