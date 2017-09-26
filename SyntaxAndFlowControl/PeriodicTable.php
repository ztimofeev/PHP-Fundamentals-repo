<?php
$input = trim(fgets(STDIN));
$elements = explode(', ', $input);
$elements_count = [];
foreach ($elements as $element){
    if (!array_key_exists($element, $elements_count)){
        $elements_count[$element] = 0;
    }
    $elements_count[$element] += 1;
}

foreach ($elements_count as $element => $count){
    if ($count == 1) {
        echo $element . ' ';
    }
}