<?php

$date_NY = mktime(0, 0, 0, 01, 01, 2018);
$current_time = time();
$difference = $date_NY - $current_time;

$hours = number_format($difference / 60 / 60, 0 , ".", " ");
$minuntes = number_format($difference/60, 0, ".", " ");
$seconds = number_format($difference, 0, ".", " ");

echo "Hours until new year : " . $hours  . PHP_EOL;
echo "Minutes until new year : " . $minuntes .  PHP_EOL;
echo "Seconds until new year : " . $seconds .  PHP_EOL;

$days = (int)($difference / 86400);
$hours = (int)(($difference % 86400) / 3600);
$minutes = (int)((($difference % 86400) % 3600) / 60);
$seconds = (int)((($difference % 86400) % 3600) % 60);

$summerTimeMonths = [4, 5, 6, 7, 8, 9, 10];
$current_month = date('n');
if (in_array($current_month, $summerTimeMonths)) {
    $hours -= 1;
}

echo "Days:Hours:Minutes:Seconds $days:$hours:$minutes:$seconds";