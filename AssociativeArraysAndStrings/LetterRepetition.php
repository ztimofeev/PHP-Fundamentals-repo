<?php
$input = trim(fgets(STDIN));

$lettersCount = [];
for ($i = 0; $i < strlen($input); $i++) {
    if (!array_key_exists($input[$i], $lettersCount)) {
        $lettersCount[$input[$i]] = 0;
    }
    $lettersCount[$input[$i]] += 1;
}

foreach ($lettersCount as $letter => $count) {
    echo $letter . ' -> ' . $count . PHP_EOL;
}