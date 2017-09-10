<?php

class Person
{
    private $name;
    private $age;
    private $occupation;

    /**
     * People constructor.
     * @param $name
     * @param $age
     * @param $occupation
     */
    public function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function __toString()
    {
        return $this->name . ' - age: ' . $this->age .', occupation: ' . $this->occupation . PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getOccupation()
    {
        return $this->occupation;
    }
}

$people = [];

$input = trim(fgets(STDIN));
while ($input != 'END') {
    $inputTokens = explode(' ', $input);
    $name = $inputTokens[0];
    $age = intval($inputTokens[1]);
    $occupation = $inputTokens[2];

    $person = new Person($name, $age, $occupation);
    $people[] = $person;

    $input = trim(fgets(STDIN));
}

function sortByAge($a, $b) {
    return $a->getAge() > $b->getAge();
}
usort($people, 'sortByAge');

foreach ($people as $person) {
    echo $person;
}