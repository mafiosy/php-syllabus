<?php

class Piglet
{
    public $points = 0;

    public function __construct()
    {
        echo PHP_EOL . 'Welcome to Piglet' . PHP_EOL;
    }

    public function playPiglet(): void
    {
        $roll = rand(1, 6);
        if ($roll == 1) {
            echo 'You rolled a ' . $roll . '!' . PHP_EOL;
            echo 'You got ' . $this->points . ' points' . PHP_EOL;
            exit;
        } else {
            echo 'You rolled a ' . $roll . '!' . PHP_EOL;
            $this->points += $roll;
        }
    }
}