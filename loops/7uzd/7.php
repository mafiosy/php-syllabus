<?php

//include 'random.php';

class Random
{
    public function __construct()
    {}

    public function random(): int
    {
        return rand(1, 6);
    }

}

class RollTheDice extends Random
{
    public function rollD6()
    {
        $desiredSUM = readline('Desired sum: ');
        $actualSUM = 0;

        while ($desiredSUM != $actualSUM){
            $firstDice = $this->random();
            $secondDice = $this->random();

            $actualSUM = $firstDice + $secondDice;

            echo $firstDice . ' and ' . $secondDice . ' = ' . $actualSUM . PHP_EOL;
        }
    }
}