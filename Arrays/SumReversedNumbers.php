<?php
declare(strict_types=1);
$inputNumbers = fgets(STDIN);
$numbers = explode(" ", $inputNumbers);
$result = 0;

foreach ($numbers as $number){
    $result += intval(strrev($number));
}

echo $result;
?>