<?php
$peopleCount = intval(fgets(STDIN));
$package = trim(fgets(STDIN));
$notCapacity = false;
$totalPrice = 0;
$hall = '';
if ($peopleCount <= 50) {
    if ($package == "Normal"){
        $totalPrice = (2500 + 500) * 0.95;
    } elseif ($package == "Gold") {
        $totalPrice = (2500 + 750) * 0.90;
    } elseif ($package == "Platinum") {
        $totalPrice = (2500 + 1000) * 0.85;
    }
    $hall = "Small Hall";
} elseif ($peopleCount <= 100) {
    if ($package == "Normal"){
        $totalPrice = (5000 + 500) * 0.95;
    } elseif ($package == "Gold") {
        $totalPrice = (5000 + 750) * 0.90;
    } elseif ($package == "Platinum") {
        $totalPrice = (5000 + 1000) * 0.85;
    }
    $hall = "Terrace";
} elseif ($peopleCount <= 120) {
    if ($package == "Normal"){
        $totalPrice = (7500 + 500) * 0.95;
    } elseif ($package == "Gold") {
        $totalPrice = (7500 + 750) * 0.90;
    } elseif ($package == "Platinum") {
        $totalPrice = (7500 + 1000) * 0.85;
    }
    $hall = "Great Hall";
} else {
    $notCapacity = true;
}
if ($notCapacity) {
    echo "We do not have an appropriate hall.";
} else {
    $pricePerPerson = number_format($totalPrice / $peopleCount, 2);
    echo "We can offer you the {$hall}\n";
    echo "The price per person is {$pricePerPerson}";
}