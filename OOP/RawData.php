<?php

class Car
{
    private $model;
    private $engine;
    private $cargo;
    private $tires = [];

    public function __construct(string $model, Engine $engine, Cargo $cargo, $tires)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
        $this->tires = $tires;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function getTires()
    {
        return $this->tires;
    }

    public function getEngine()
    {
        return $this->engine;
    }
}

class Engine
{
    private $speed;
    private $power;

    public function __construct(int $speed, int $power)
    {
        $this->speed = $speed;
        $this->power = $power;
    }

    public function getPower()
    {
        return $this->power;
    }
}

class Cargo
{
    private $weight;
    private $type;

    public function __construct(float $weight, string $type)
    {
        $this->weight = $weight;
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}

class Tire
{
    private $age;
    private $pressure;

    public function __construct(int $age, float $pressure)
    {
        $this->age = $age;
        $this->pressure = $pressure;
    }

    public function getPressure()
    {
        return $this->pressure;
    }
}

$cars = [];
$countCars = intval(fgets(STDIN));
for ($cnt = 0; $cnt < $countCars; $cnt++) {
    $input = trim(fgets(STDIN));
    $inputTokens = explode(' ', $input);

    $model = $inputTokens[0];
    $speed = $inputTokens[1];
    $power = $inputTokens[2];
    $weight = $inputTokens[3];
    $type = $inputTokens[4];

    $tires = [];

    $engine = new Engine($speed, $power);
    $cargo = new Cargo($weight, $type);

    for ($i = 5; $i < 13; $i += 2) {
        $currentTire = new Tire($inputTokens[$i + 1], $inputTokens[$i]);
        $tires[] = $currentTire;
    }

    $car = new Car($model, $engine, $cargo, $tires);
    $cars[] = $car;
}

$cargoType = trim(fgets(STDIN));

switch ($cargoType) {
    case 'fragile':
        foreach ($cars as $car) {
            $currentCargo = $car->getCargo()->getType();
            if ($currentCargo == $cargoType) {
                $carTire = $car->getTires();
                foreach ($carTire as $tire) {
                    if ($tire->getPressure() < 1) {
                        echo $car->getModel() . "\n";
                        break;
                    }
                }
            }
        }
        break;

    case 'flamable':
        foreach ($cars as $car) {
            $currentCargo = $car->getCargo()->getType();
            if ($car->getEngine()->getPower() > 250) {
                if ($currentCargo == $cargoType) {
                    echo $car->getModel() . "\n";
                }
            }
        }
        break;
}