<?php
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);
$nums = array_map("intval", $nums);

$maxCount = 1;
$maxSymbol = $nums[0];
$currentCount = 1;
$limit = count($nums);

for ($i = 1; $i < $limit; $i++) {
    if ($nums[$i] == $nums[$i - 1]) {
        $currentCount++;
        if ($currentCount > $maxCount) {
            $maxCount = $currentCount;
            $maxSymbol = $nums[$i];
        }
    } else {
        $currentCount = 1;
    }
}
unset($limit);

$result = [];
for ($i = 0; $i < $maxCount; $i++) {
    $result[] = $maxSymbol;
}

echo implode(' ', $result);