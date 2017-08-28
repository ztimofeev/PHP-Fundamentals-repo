<?php
$line = trim(fgets(STDIN));
$rotate = trim(fgets(STDIN));
$nums = explode(' ', $line);
$nums = array_map('intval', $nums);

$count = count($nums);
$result = [];
for ($i = 0; $i < $count; $i++) {
    $result[] = 0;
}

for ($i = 0; $i < $rotate; $i++) {

    $nextFirst = $nums[$count - 1];
    for ($j = $count - 1; $j > 0; $j--) {
       $nums[$j] = $nums[$j - 1];
    }
    $nums[0] = $nextFirst;

    for ($c = 0; $c < $count; $c++) {
        $result[$c] += $nums[$c];
    }
}
unset($count);

echo implode(' ', $result);