<?php

class Person
{
    private $name;
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}

$people = [];
$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $input = trim(fgets(STDIN));
    $personInfo = explode(' ', $input);
    $name = $personInfo[0];
    $age = intval($personInfo[1]);
    if ($age > 30) {
        $people[] = new Person($name, $age);
    }
}

function sortObjByNames($a, $b){
    return strcmp($a->getName(), $b->getName());
}

usort($people, 'sortObjByNames');

foreach ($people as $human) {
    if ($human->getAge() > 30) {
        echo $human->getName() . ' - ' . $human->getAge() . PHP_EOL;
    }
}

