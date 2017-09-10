<?php

class Employee
{
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    public function __construct(string $name, float $salary, string $position, string $department)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = 'n/a';
        $this->age = -1;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }
}

$employees = [];
$departments = [];

$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $input = trim(fgets(STDIN));
    $employeeInfo = explode(' ', $input);

    $name = $employeeInfo[0];
    $salary = floatval($employeeInfo[1]);
    $position = $employeeInfo[2];
    $department = $employeeInfo[3];

    $employee = new Employee($name, $salary, $position, $department);

    if (!in_array($department, $departments)) {
        $departments[] = $department;
    }

    if (count($employeeInfo) == 5) {
        if (preg_match('/[@]/', $employeeInfo[4])) {
            $email = $employeeInfo[4];
            $employee->setEmail($email);
        } else {
            $age = intval($employeeInfo[4]);
            $employee->setAge($age);
        }
    }

    if (count($employeeInfo) == 6) {
        $age = $age = intval($employeeInfo[5]);
        $email = $employeeInfo[4];
        $employee->setEmail($email);
        $employee->setAge($age);
    }

    $employees[] = $employee;
}

function getAverageSalary($dep, $employees)
{
    $sum = 0;
    $count = 0;
    for ($i = 0; $i < count($employees); $i++) {
        $d = $employees[$i]->getDepartment();
        if ($dep === $d) {
            $sum += $employees[$i]->getSalary();
            $count++;
        }
    }
    return $sum / $count;
}

$maxAvrSalary = 0;
$bestDepartment = '';
for ($i = 0; $i < count($departments); $i++) {
    $avrSalary = getAverageSalary($departments[$i], $employees);
    if ($avrSalary > $maxAvrSalary) {
        $maxAvrSalary = $avrSalary;
        $bestDepartment = $departments[$i];
    }
}

function sortBySalary($a, $b)
{
    return $b->getSalary() > $a->getSalary();
}

usort($employees, 'sortBySalary');

$partsToPrint = [];
echo 'Highest Average Salary: ' . $bestDepartment . PHP_EOL;
foreach ($employees as $e) {
    if ($e->getDepartment() == $bestDepartment) {
        $partsToPrint[] = $e->getName() . ' ' . number_format($e->getSalary(), 2) . ' '
            . $e->getEmail() . ' ' . $e->getAge();
    }
}
for ($i = 0; $i < count($partsToPrint); $i++) {
    if ($i != count($partsToPrint) - 1) {
        echo $partsToPrint[$i] . PHP_EOL;
    } else {
        echo $partsToPrint[$i];
    }
}
