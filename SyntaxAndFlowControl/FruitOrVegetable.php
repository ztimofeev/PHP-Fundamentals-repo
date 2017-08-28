<?php
$word = $argv[1];
switch ($word){
    case 'banana':
    case 'aple':
    case 'kiwi':
    case 'chery':
    case 'lemon':
    case 'grapes':
    case 'peach':
        echo "fruit";
        break;
    case 'tomato':
    case 'cucamber':
    case 'pepper':
    case 'onion':
    case 'parsley':
    case 'garlic':
        echo 'vegetable';
        break;
    default:
        echo 'unknown';
        break;
}