<?php
$speed = intval(fgets(STDIN));
$area = trim(fgets(STDIN));

function setSpeedLimit($area) : int {
    $limit = 0;
    switch ($area){
        case 'motorway':
            $limit = 130;
            break;
        case 'interstate':
            $limit = 90;
            break;
        case 'city':
            $limit = 50;
            break;
        case 'residential':
            $limit = 20;
            break;
    }
    return $limit;
}

function upSpeedMessage($sp, $lim) {
    $speedDiff = $sp - $lim;
    if ($speedDiff >= 40) {
        return 'reckless driving';
    } elseif ($speedDiff >= 20) {
        return 'excessive speeding';
    } elseif ($speedDiff >= 0) {
        return 'speeding';
    }
}

echo upSpeedMessage($speed, setSpeedLimit($area));
