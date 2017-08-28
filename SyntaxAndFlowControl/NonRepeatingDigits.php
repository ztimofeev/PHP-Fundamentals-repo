<?php
$num = 234;
if ($num > 100){
    if ($num > 1000){
        for ($i = 102; $i < 988; $i++){
            if (diff($i) == true){
                echo $i . ' ';
            }
        }
    } else {
        for ($i = 102; $i < $num; $i++){
            if (diff($i) == true){
                echo $i . ' ';
            }
        }
    }

}

function diff($number) : bool {
    $numberToString = (string) $number;
    $firstDigit = $numberToString[0];
    $secondDigit = $numberToString[1];
    $thirdDigit = $numberToString[2];
    if (($firstDigit == $secondDigit) || ($secondDigit == $thirdDigit) || ($firstDigit == $thirdDigit)){
        return false;
    } else {
        return true;
    }
}