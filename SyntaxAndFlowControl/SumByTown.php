<?php
$input = trim(fgets(STDIN));
$input = explode(', ', $input);
$towns_profit = [];
for ($i = 0; $i < count($input); $i += 2){
    $town = $input[$i];
    $profit = $input[$i + 1];
    if (! array_key_exists($town, $towns_profit)) {
        $towns_profit[$town] = 0;
    }
    $towns_profit[$town] += $profit;
}
$c = 1;
echo '[';
foreach($towns_profit as $town => $profit){
    if ($c < count($towns_profit)) {
        echo '"' . $town . '" => "' . $profit . '", ';
    } else {
        echo '"' . $town . '" => "' . $profit . '"';
    }
    $c++;
}
echo ']';
