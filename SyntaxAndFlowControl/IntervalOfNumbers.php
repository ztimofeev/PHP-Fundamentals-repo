<?php
$start = intval(fgets(STDIN));
$end = intval(fgets(STDIN));
if ($start < $end){
    for ($i = $start; $i <= $end; $i++) {
        echo "$i\n";
    }
} else {
    for ($i = $end; $i <= $start; $i++) {
        echo "$i\n";
    }
}