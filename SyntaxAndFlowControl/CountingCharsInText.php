<?php
$input = trim(fgets(STDIN));
$input = strtolower($input);
$letters = [];
for ($i = 0; $i < strlen($input); $i++){
    if (!array_key_exists($input[$i], $letters)) {
        $letters[$input[$i]] = 0;
    }
    $letters[$input[$i]] += 1;
}
$counter = 1;
echo '[';
foreach ($letters as $letter => $count){
    if ($counter < count($letters)){
        echo '"' . $letter . '" => "' . $count . '", ';
    } else {
        echo '"' . $letter . '" => "' . $count . '"';
    }
    $counter++;
}
echo ']';
