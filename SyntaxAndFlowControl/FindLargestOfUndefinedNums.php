<?php
$largestNumber = 0;
while (true) {
    $input = intval(fgets(STDIN));
    if (empty($input)) {
        break;
    }

    if ($input > $largestNumber) {
        $largestNumber = $input;
    }
}

echo 'Max: ' . $largestNumber;