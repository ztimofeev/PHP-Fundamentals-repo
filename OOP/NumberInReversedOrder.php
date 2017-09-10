<?php

class DecimalNumber
{
    private $number;

    public function __construct(float $number)
    {
        $this->number = $number;
        echo strrev(abs($number));
    }
}

$input = floatval(fgets(STDIN));
$reversedInput = new DecimalNumber($input);