<?php

$names = ['patrisha', 'georgi', 'pesho', 'penka', 'gosho', 'stamat', 'penelope'];

$filteredNames = array_filter($names, function ($name) {
    return $name[0] == 'p';
});

var_dump($filteredNames);

$filteredNamesByLetters = array_filter($names, function($name){
   return strlen($name) > 5;
});

var_dump($filteredNamesByLetters);

$numbers = [1, 3, 56, 43, 5, 556, 453, 2345];
usort($numbers, function($a, $b){
    return $b > $a;
});

var_dump($numbers);

rsort($numbers);
var_dump($numbers);