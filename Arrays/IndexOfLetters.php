<?php
$alphabet = [];
for ($i = 'a'; $i <= 'z'; $i++) {
    $alphabet[] = $i;
    if ($i === 'z'){
        break;
    }
}

$line = trim(fgets(STDIN));
$line = strtolower($line);

for ($x = 0; $x < strlen($line); $x++) {
    for ($i = 0; $i < count($alphabet); $i++) {
        if ($alphabet[$i] === $line[$x]) {
            echo "$line[$x] -> $i" . "\n";
        }
    }
}