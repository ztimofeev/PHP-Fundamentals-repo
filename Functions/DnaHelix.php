<?php
$n = intval(fgets(STDIN));

function dnaSequence($num) {
    $dna = ['A', 'T', 'C', 'G', 'T', 'T', 'A', 'G', 'G', 'G'];
    for ($i = 0; $i < $num; $i++) {
        $mark = $i % 4;
        $j = ($i * 2) % 10;
        switch ($mark){
            case 0:
                echo '**' . $dna[$j] . $dna[$j + 1] .'**' . "\n";
                break;

            case 1:
                echo '*' . $dna[$j] . '--' . $dna[$j + 1] .'*' . "\n";
                break;

            case 2:
                echo $dna[$j] . '----' . $dna[$j + 1] . "\n";
                break;

            case 3:
                echo '*' . $dna[$j] . '--' . $dna[$j + 1] .'*' . "\n";
                break;
        }
    }
}

dnaSequence($n);