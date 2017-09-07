<?php
$inputLine = trim(fgets(STDIN));
$nums = explode(' ', $inputLine);
$result = [];
foreach ($nums as $num) {
    if (!isset($result[$num])) {
        $result[$num] = 0;
    }
    $result[$num] += 1;
}
ksort($result);
foreach ($result as $key => $value) {
    echo "$key -> $value times\n";
}