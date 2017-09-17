<?php

class Car
{
    private $speed;
    private $fuelAmount;
    private $fuelConsumption;
    private $traveledDistance;
    private $traveledTime;

    public function __construct(int $speed, float $fuelAmount, float $fuelConsumption) {
        $this->speed = $speed;
        $this->fuelAmount = $fuelAmount;
        $this->fuelConsumption = $fuelConsumption;
        $this->traveledDistance = 0;
        $this->traveledTime = 0;
    }

    public function getTraveledTime()
    {
        return $this->traveledTime;
    }

    public function getTraveledDistance()
    {
        return $this->traveledDistance;
    }

    public function getFuel()
    {
        return $this->fuelAmount;
    }

    public function traveledDistance($distance)
    {
        $fuelRatio = $this->fuelConsumption / 100;
        $fuelSpent = $distance * $fuelRatio;
        if ($fuelSpent > $this->fuelAmount){
            $this->traveledDistance += $this->fuelAmount / $this->fuelConsumption;
            $this->fuelAmount = 0;
        } else {
            $this->traveledDistance += $distance;
            $this->fuelAmount -= $fuelSpent;
        }
        $this->traveledTime = ($this->traveledDistance / $this->speed) * 60;
    }

    public function reFuel($fuel){
        $this->fuelAmount += $fuel;
    }
}

$input = trim(fgets(STDIN));
$carData = explode(' ', $input);
$speed = $carData[0];
$fuel = $carData[1];
$consumption = $carData[2];
$car = new Car($speed, $fuel, $consumption);

$cmd = trim(fgets(STDIN));
while ($cmd != 'END') {
    $cmdTokens = explode(' ', $cmd);
    switch ($cmdTokens[0])
    {
        case 'Travel':
            $distance = $cmdTokens[1];
            $car->traveledDistance($distance);
            break;

        case 'Refuel':
            $car->reFuel($cmdTokens[1]);
            break;

        case 'Distance':
            echo 'Total Distance: ' . number_format($car->getTraveledDistance(), 1) . PHP_EOL;
            break;

        case 'Time':
            $totalHours = (int)$car->getTraveledTime() / 60;
            $totalMinutes = floor($car->getTraveledTime() % 60);
            echo 'Total Time: ' . $totalHours . ' hours and ' . $totalMinutes . ' minutes' . PHP_EOL;
            break;

        case 'Fuel':
            echo 'Fuel left: ' . number_format($car->getFuel(), 1) . ' liters';
            break;
    }
    $cmd = trim(fgets(STDIN));
}