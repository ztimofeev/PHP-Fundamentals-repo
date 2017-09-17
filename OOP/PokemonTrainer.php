<?php
class Trainer
{
    private $name;
    private $badges;
    private $pokemons;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->badges = 0;
        $this->pokemons = [];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBadges()
    {
        return $this->badges;
    }

    public function setBadges($element)
    {
        $hasNotElement = true;
        foreach ($this->pokemons as $pokemon){
            if ($pokemon->getElement() === $element){
                $this->badges++;
                $hasNotElement = false;
            }
        }

        if($hasNotElement) {
            foreach ($this->pokemons as $pokemon) {
                $pokemon->reduceHealth();
                if ($pokemon->getHealth() <= 0){
                    unset($pokemon);
                }
            }
        }
    }

    public function setPokemons($pokemon){
        $this->pokemons[] = $pokemon;
    }

    public function getPokemons()
    {
        return $this->pokemons;
    }
}

class Pokemon
{
    private $name;
    private $element;
    private $health;

    public function __construct(string $name, string$element, int $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getElement()
    {
        return $this->element;
    }

    public function reduceHealth() {
        $this->health -= 10;
    }

    public function getHealth()
    {
        return $this->health;
    }
}

$trainers = [];

$input = trim(fgets(STDIN));

while ($input != 'Tournament') {
    $tokens = explode(' ', $input);

    $trainerName = $tokens[0];
    $pokemonName = $tokens[1];
    $element = $tokens[2];
    $health = intval($tokens[3]);

    $pokemon = new Pokemon($pokemonName, $element, $health);
    $trainerExists = true;

    foreach ($trainers as $trainer){
        if ($trainer->getName() === $trainerName){
            $trainer->setPokemons($pokemon);
            $trainerExists = false;
            break;
        }
    }
    if ($trainerExists){
        $trainer = new Trainer($trainerName);
        $trainer->setPokemons($pokemon);
        $trainers[] = $trainer;
    }

    $input = trim(fgets(STDIN));
}

$cmd = trim(fgets(STDIN));
while ($cmd != 'End') {
    foreach ($trainers as $trainer){
        $trainer->setBadges($cmd);
    }
    $cmd = trim(fgets(STDIN));
}

usort($trainers, 'sortByBadges');

foreach ($trainers as $trainer){
    //var_dump($trainer) . PHP_EOL;
    echo $trainer->getName() . ' ' . $trainer->getBadges() . ' ' . count($trainer->getPokemons()) . PHP_EOL;
}

function sortByBadges($a, $b){
    return $a->getBadges() < $b->getBadges();
}