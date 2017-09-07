<?php
$number = floatval(fgets(STDIN));
$inputLine = trim(fgets(STDIN));
$commands = explode(', ', $inputLine);

foreach ($commands as $cmd) {
    $number = exeCommands($number, $cmd);
    echo $number . "\n";
}

function exeCommands($num, $cmd) {
    switch ($cmd) {
        case 'chop':
            $num /= 2;
            break;
        case 'dice':
            $num = sqrt($num);
            break;
        case 'spice':
            $num += 1;
            break;
        case 'bake':
            $num *= 3;
            break;
        case 'fillet':
            $num = $num - $num * 0.2;
            break;
    }
    return $num;
}
