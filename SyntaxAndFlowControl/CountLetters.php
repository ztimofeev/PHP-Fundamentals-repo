<?php
$input = trim(fgets(STDIN));
$letters = str_split($input);
$lettersAndCount = [];
foreach ($letters as $letter) {
    if (!array_key_exists($letter, $lettersAndCount)){
        $lettersAndCount[$letter] = 0;
    }
    $lettersAndCount[$letter]++;
}
foreach ($lettersAndCount as $letter => $count) {
    echo $letter . ' -> ' . $count . PHP_EOL;
}