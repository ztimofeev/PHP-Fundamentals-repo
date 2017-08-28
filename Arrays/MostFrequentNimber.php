<?php
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);

$numbersCount = [];

foreach ($nums as $num) {
    if (! array_key_exists($num, $numbersCount)) {
        $numbersCount[$num] = 0;
    }
    $numbersCount[$num]++;
}
arsort($numbersCount);
$result = array_keys($numbersCount)[0];
echo($result);
