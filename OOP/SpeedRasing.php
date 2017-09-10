<?php

class Car
{
    private $model;
    private $fuelAmount;
    private $fuelConsumption;
    private $distanceTraveled;

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @return float
     */
    public function getFuelAmount(): float
    {
        return $this->fuelAmount;
    }

    /**
     * @param float $fuelAmount
     */
    public function setFuelAmount(float $fuelAmount)
    {
        $this->fuelAmount = $fuelAmount;
    }

    /**
     * @return float
     */
    public function getFuelConsumption(): float
    {
        return $this->fuelConsumption;
    }

    /**
     * @param float $fuelConsumption
     */
    public function setFuelConsumption(float $fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    /**
     * @return int
     */
    public function getDistanceTraveled(): int
    {
        return $this->distanceTraveled;
    }

    /**
     * @param int $distanceTraveled
     */
    public function setDistanceTraveled(int $distanceTraveled)
    {
        $this->distanceTraveled = $distanceTraveled;
    }

    public function __construct(string $model, float $fuelAmount, float $fuelConsumption)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelConsumption = $fuelConsumption;
        $this->distanceTraveled = 0;
    }

    public function drive($distance)
    {
        $spentFuel =$distance * $this->fuelConsumption;
        $spentFuel = round($spentFuel, 2);
        if ($spentFuel > round($this->fuelAmount, 2))
        {
            throw new Exception("Insufficient fuel for the drive");
        }
        $this->fuelAmount -= $spentFuel;
        $this->distanceTraveled += $distance;
    }

    public function __toString()
    {
        return $this->model . ' '
                    . number_format(abs($this->fuelAmount), 2) . ' '
                    . $this->distanceTraveled;
    }
}

$cars = [];
$carsCount =  floatval(fgets(STDIN));

for ($i = 0; $i < $carsCount; $i++) {
    $inputCars = trim(fgets(STDIN));
    $carsData = explode(' ',$inputCars);

    $currentModel = $carsData[0];
    $currentFuelAmount = floatval($carsData[1]);
    $currentFuelConsumption = floatval($carsData[2]);

    $currentCar = new Car($currentModel, $currentFuelAmount, $currentFuelConsumption);

    $cars[$currentModel] = $currentCar;
}

$driveInfo = trim(fgets(STDIN));

while ($driveInfo != "End") {
    $driveInfoTokens = explode(' ', $driveInfo);
    $carModel = $driveInfoTokens[1];
    $distance = floatval($driveInfoTokens[2]);

    $carsToDrive = $cars[$carModel];
    try {
        $carsToDrive->drive($distance);
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }

    $driveInfo = trim(fgets(STDIN));
}

foreach ($cars as $car) {
    echo $car . PHP_EOL;
}
