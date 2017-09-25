<?php
$today = date("d/m/Y");
echo $today . "\n";
echo date("d") . "\n";
echo date("m") . "\n";
echo date("Y") . "\n";

$timestamp = time();
echo $timestamp;
echo "\n";
echo(date("F d, Y h:i:s", $timestamp));
echo "\n";

$newYear = mktime(23, 59, 59, 12, 31, 2017);
$diffToNewYear = $newYear - $timestamp;
echo $diffToNewYear;
echo "\n";
echo date("d, h:i:s", $diffToNewYear);
echo "\n";
$daysToNY = intval($diffToNewYear / (24 * 60 * 60));
$hours = intval(($diffToNewYear % (24 * 60 * 60)) / 3600);
$minutes = intval((($diffToNewYear % (24 * 60 * 60)) % 3600) / 60);
$seconds = (($diffToNewYear % (24 * 60 * 60)) % 3600) % 60;
echo $daysToNY;
echo "\n";
echo $hours;
echo "\n";
echo $minutes;
echo "\n";
echo $seconds;
echo "\n";
echo "To New Year left exactly: $daysToNY days, $hours hours, $minutes minutes and $seconds seconds!";