<?php
class Fibonacci
{
    private $fibo = [0, 1, 1];
    private $result = [];

    public function getFibonacciSequence($startIndex, $endIndex)
    {
        if ($endIndex > 2)
        {
            $this->setFiboSeq($endIndex);
        }

        for ($i = $startIndex; $i < $endIndex; $i++)
        {
            $this->result[] = $this->fibo[$i];
        }
        echo join(', ', $this->result);
    }

    private function setFiboSeq($x)
    {
        $b = 1;
        $f = 1;
        for ($i = 3; $i <= $x; $i++)
        {
            $a = $b;
            $b = $f;
            $f = $a + $b;
            $this->fibo[] = $f;
        }
    }
}

$fibo = new Fibonacci();
$startIndex = intval(fgets(STDIN));
$endIndex = intval(fgets(STDIN));
$fibo->getFibonacciSequence($startIndex, $endIndex);