<?php

class Number
{
    private $number;

    public function __construct(int $number)
    {
        $this->number = $number;
        echo $this->getLastNumber($number);
    }

    public function getLastNumber($number)
    {
        $numberNames = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
        $lastNumber = $this->number % 10;
        return $numberNames[$lastNumber];
    }
}

$input = intval(fgets(STDIN));
$result = new Number($input);