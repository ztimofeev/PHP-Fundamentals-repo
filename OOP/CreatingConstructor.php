<?php
class Person
{
    public $name;
    public $age;

    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
        echo $this->name . ' ' . $this->age;
    }

}
$input_name = trim(fgets(STDIN));
$input_age = intval(fgets(STDIN));

$person = new Person($input_name, $input_age);
