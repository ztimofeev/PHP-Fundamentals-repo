<?php
$text = trim(fgets(STDIN));
$len = strlen($text);
if ($len < 20){
    $diff = 20 - strlen($text);
    echo $text . str_repeat('*', $diff);
} else {
    echo substr($text, 0, 20);
}
