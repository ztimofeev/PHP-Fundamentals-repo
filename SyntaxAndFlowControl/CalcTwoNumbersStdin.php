<?php
$operation = $argv[1];

$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));

if ($operation == "Sum") {
    echo ' ==' . ($numberOne + $numberTwo);
} elseif ($operation == "Subtract") {
    echo ' ==' . ($numberOne + $numberTwo);
} else {
    echo ' == Wrong operation supplied';
}

