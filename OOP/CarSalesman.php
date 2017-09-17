<?php
class Car
{
    private $model;
    private $engine;
    private $weight;
    private $color;

    public function __construct(string $model, Engine $engine)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = 'n/a';
        $this->color = 'n/a';
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

class Engine
{
    private $model;
    private $power;
    private $displacement;
    private $efficiency;

    public function __construct(string $model, string $power)
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = 'n/a';
        $this->efficiency = 'n/a';
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function setDisplacement($displacement)
    {
        $this->displacement = $displacement;
    }

    public function getDisplacement()
    {
        return $this->displacement;
    }

    public function setEfficiency(string $efficiency)
    {
        $this->efficiency = $efficiency;
    }

    public function getEfficiency()
    {
        return $this->efficiency;
    }
}

$engines = [];
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $input = trim(fgets(STDIN));
    $tokens = explode(' ', $input);

    $engine = new Engine($tokens[0], intval($tokens[1]));

    if (count($tokens) == 3) {
        if (is_numeric($tokens[2])) {
            $engine->setDisplacement($tokens[2]);
        } else {
            $engine->setEfficiency($tokens[2]);
        }
    }

    if (count($tokens) == 4) {
        $engine->setDisplacement(intval($tokens[2]));
        $engine->setEfficiency($tokens[3]);
    }

    $engines[] = $engine;
}

$cars = [];
$m = intval(fgets(STDIN));

for ($i = 0; $i < $m; $i++) {
    $input = trim(fgets(STDIN));
    $tokens = explode(' ', $input);

    $model = $tokens[0];
    $engineModel = $tokens[1];

    foreach ($engines as $engine) {
        $currentModel = $engine->getModel();
        if ($currentModel == $engineModel) {
            $engineModel = $engine;
            break;
        }
    }

    if (is_object($engineModel)) {
        $car = new Car($model, $engineModel);
        if (count($tokens) == 3) {
            if (is_numeric($tokens[2])) {
                $car->setWeight($tokens[2]);
            } else {
                $car->setColor($tokens[2]);
            }
        }

        if (count($tokens) == 4) {
            $car->setWeight(floatval($tokens[2]));
            $car->setColor($tokens[3]);
        }

        $cars[] = $car;
    }
}

foreach ($cars as $car) {
    echo $car->getModel() . ':' . PHP_EOL;
    echo '  ' . $car->getEngine()->getModel() . ':' . PHP_EOL;
    echo '    Power: ' . $car->getEngine()->getPower() . PHP_EOL;
    echo '    Displacement: ' . $car->getEngine()->getDisplacement()  . PHP_EOL;
    echo '    Efficiency: ' . $car->getEngine()->getEfficiency() . PHP_EOL;
    echo '  Weight: ' . $car->getWeight() . PHP_EOL;
    echo '  Color: ' . $car->getColor() . PHP_EOL;
}