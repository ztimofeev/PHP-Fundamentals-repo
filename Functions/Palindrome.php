<?php
$input = trim(fgets(STDIN));
$symbols = str_split($input);
if (isPalindrome($symbols)){
    echo 'true';
} else {
    echo 'false';
}

function isPalindrome($arr){
    for ($i = 0; $i < count($arr) / 2; $i++){
        if ($arr[$i] != $arr[count($arr) - $i - 1]){
            return false;
        }
    }
    return true;
}