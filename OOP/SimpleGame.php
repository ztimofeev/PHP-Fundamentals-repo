<?php

class Player
{
    private static $lastId;

    private $id;
    private $name;
    private $health;
    private $attack;

    public function __construct(string $name, int $health, int $attack)
    {
        $this->name = $name;
        $this->health = $health;
        $this->attack = $attack;
        $this->id = ++self::$lastId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isAlive(): bool
    {
        return $this->health > 0;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function reduceHealth($attack): void
    {
        $this->health -= $attack;
    }

    public function attack(Player $player): void
    {
        if ($player->id == $this->getId()) {
            throw new Exception('Cannot attacked yourself!');
        }

        $player->reduceHealth($this->getAttack());
    }
}

$rounds = 10;
$player1 = new Player('Pesho', 50, 20);
$player2 = new Player('Gosho', 42, 12);

while ($rounds > 0 && $player1->isAlive() && $player2->isAlive()) {
    $player1->attack($player2);
    $player2->attack($player1);
    $rounds--;
    echo $player1->getHealth() . "<br>";
    echo $player2->getHealth();
    echo "<hr>";
}

$winner = $player1->isAlive() ? $player1->getName() : $player2->getName();

if ($player1->isAlive() && $player2->isAlive()) {
    echo "STANDOFF";
} else {
    echo "The Big Winner Is: $winner";
}

