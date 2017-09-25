<?php
$input = trim(fgets(STDIN));
$inventory = [];
while ($input != "shopping time"){
    $tokens = explode(' ', $input);
    $product = $tokens[1];
    $quantity = $tokens[2];

    if (!key_exists($product, $inventory)) {
        $inventory[$product] = 0;
    }
    $inventory[$product] += $quantity;

    $input = trim(fgets(STDIN));
}

$input = trim(fgets(STDIN));

while ($input != "exam time") {
    $tokens = explode(' ', $input);
    $product = $tokens[1];
    $quantity = $tokens[2];

    if (key_exists($product, $inventory)){
        if ($inventory[$product] > 0) {
            if ($inventory[$product] == 0){
                echo "{$product} out of stock" . PHP_EOL;
            } elseif ($quantity > $inventory[$product]) {
                $inventory[$product] = 0;
            } else {
                $inventory[$product] -= $quantity;
            }
        }
    } else {
        echo "{$product} doesn't exist" . PHP_EOL;
    }

    $input = trim(fgets(STDIN));
}

foreach ($inventory as $product => $quantity) {
    if ($quantity > 0) {
        echo $product . ' -> ' . $quantity . PHP_EOL;
    }
}
