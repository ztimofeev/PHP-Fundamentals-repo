<?php

class Cars
{
    private $speed;
    private $fuelAmount;
    private $fuelSpent;
    private $driveDistance;
    private $driveTime;

    public function __construct(int $speed, float $fuelAmount, float $fuelSpent)
    {
        $this->speed = $speed;
        $this->fuelAmount = $fuelAmount;
        $this->fuelSpent = $fuelSpent;
        $this->driveDistance = 0;
        $this->driveTime = 0;
    }

    public function setFuelAmount($fuel)
    {
        $this->fuelAmount += $fuel;
    }

    public function getFuelAmount()
    {
        return $this->fuelAmount;
    }

    public function setDriveTime($distance)
    {
        $this->driveTime += $distance / $this->speed * 60;
    }

    public function getDriveTime()
    {
        $hours = (int)($this->driveTime / 60);
        $minutes = $this->driveTime % 60;
        return $hours . " hours and " . $minutes . " minutes";
    }

    public function drive($distance)
    {
        $fullDriveDistance = $this->fuelAmount * 100 / $this->fuelSpent;
        if ($fullDriveDistance >= $distance)
        {
            $this->driveDistance += $distance;
            $this->fuelAmount -= $distance * $this->fuelSpent / 100;
            $this->setDriveTime($distance);
        }
        else
        {
            $this->driveDistance += $fullDriveDistance;
            $this->fuelAmount = 0;
            $this->setDriveTime($fullDriveDistance);
        }
    }

    public function getDriveDistance()
    {
        return $this->driveDistance;
    }
}

$input = trim(fgets(STDIN));
$carData = explode(' ', $input);
$speed = intval($carData[0]);
$fuel = floatval($carData[1]);
$fuelSpent = floatval($carData[2]);

$car = new Cars($speed, $fuel, $fuelSpent);

$input = trim(fgets(STDIN));
while ($input != 'END') {
    $inputTokens = explode(' ', $input);
    switch ($inputTokens[0]){
        case 'Travel':
            $distance = floatval($inputTokens[1]);
            $car->drive($distance);
            break;

        case 'Refuel':
            $fuel = floatval($inputTokens[1]);
            $car->setFuelAmount($fuel);
            break;

        case 'Distance':
            echo 'Total Distance: ' . number_format($car->getDriveDistance(), 1) . PHP_EOL;
            break;

        case 'Time':
            echo 'Total Time: ' . $car->getDriveTime() . PHP_EOL;
            break;

        case 'Fuel':
            echo 'Fuel left: ' . number_format($car->getFuelAmount(), 1) . ' liters' . PHP_EOL;
            break;
    }
    $input = trim(fgets(STDIN));
}