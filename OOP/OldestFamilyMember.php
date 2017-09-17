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

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Family
{
    private $familyMembers = [];

    public function addMember(Person $member)
    {
        $this->familyMembers[] = $member;
    }

    public function getOldestMember()
    {
        function sortByAge($a, $b)
        {
            return $a->getAge() < $b->getAge();
        }
        usort($this->familyMembers, 'sortByAge');
        return $this->familyMembers[0]->getName() . ' ' . $this->familyMembers[0]->getAge();
    }
}

$family = new Family();

$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++){
    $input = trim(fgets(STDIN));
    $personData = explode(' ', $input);
    $name = $personData[0];
    $age = intval($personData[1]);

    $person = new Person($name, $age);
    $family->addMember($person);
}

echo $family->getOldestMember();
