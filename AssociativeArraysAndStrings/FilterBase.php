<?php
$input = trim(fgets(STDIN));
$employees = [];
while ($input != 'filter base') {
    $info = explode(' -> ', $input);
    $kindData = '';
    list($name, $data) = $info;
    if (is_numeric($data)) {
        if (intval($data) == $data) {
            $kindData = 'age';
        } else {
            $kindData = 'salary';
        }
    } else {
        $kindData = 'position';
    }

    if (!key_exists($name, $employees)) {
        $employees[$name]['age'] = '';
        $employees[$name]['salary'] = '';
        $employees[$name]['position'] = '';
    }
    $employees[$name][$kindData] = $data;

    $input = trim(fgets(STDIN));
}

$command = trim(fgets(STDIN));
$kindInfo = strtolower($command);
foreach ($employees as $name => $data) {
    if ($data[$kindInfo] != ''){
        if ($command === 'Salary') {
            $data[$kindInfo] = number_format(floatval($data[$kindInfo]), 2, '.', '');
        }
        echo 'Name: ' . $name .PHP_EOL;
        echo $command . ' ' . $data[$kindInfo] . PHP_EOL;
        echo '====================' . PHP_EOL;
    }
}

