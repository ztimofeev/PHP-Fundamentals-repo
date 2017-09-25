<?php
$largestNumber = PHP_INT_MIN;
$input = intval(fgets(STDIN));
while (! empty($input)) {
    $largestNumber = max($largestNumber, $input);

    $input = intval(fgets(STDIN));
}
echo 'Max: ' . $largestNumber;