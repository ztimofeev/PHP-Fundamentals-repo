<?php
$text = trim(fgets(STDIN));
$symbolAndNumber = trim(fgets(STDIN));
$symbolAndNumber = explode(' ', $symbolAndNumber);
$symbol = $symbolAndNumber[0];
$occurrence = intval($symbolAndNumber[1]);
$count = 0;
$notFound = true;
for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] == $symbol){
        $count++;
        if ($count == $occurrence){
            echo $i;
            $notFound = false;
            break;
        }
    }
}
if ($notFound) {
    echo "Find the letter yourself!";
}

