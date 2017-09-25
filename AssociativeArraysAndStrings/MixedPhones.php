<?php
$input = trim(fgets(STDIN));
$namesPhones = [];
while ($input != 'Over') {
    $tokens = explode(' : ', $input);
    $name = $tokens[0];
    $phone = $tokens[1];

    if (is_numeric($name)) {
        $name = $tokens[1];
        $phone = $tokens[0];
    }

    if (!key_exists($name, $namesPhones)){
        $namesPhones[$name] = $phone;
    }

    $input = trim(fgets(STDIN));
}

ksort($namesPhones);
foreach ($namesPhones as $name => $phone) {
    echo $name . ' -> ' . $phone . PHP_EOL;
}




