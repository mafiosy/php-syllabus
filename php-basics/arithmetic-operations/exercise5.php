<?php

//user chosen number is entered in console as $argv[1]

$luckyNumber = rand(1, 100);

echo 'I\'m thinking of a number between 1-100.  Try to guess it.' . PHP_EOL;
switch ($argv[1]) {
    case ($argv[1] < $luckyNumber && $argv[1] > 0 && $argv[1] < 100 && $argv[1] != null)  :
        echo 'Sorry, you are too low.  I was thinking of ' . $luckyNumber . '.' . PHP_EOL;
        break;

    case ($argv[1] > $luckyNumber && $argv[1] > 0 && $argv[1] < 100 && $argv[1] != null) :
        echo 'Sorry, you are too high.  I was thinking of ' . $luckyNumber . '.' . PHP_EOL;
        break;

    case ($argv[1] === $luckyNumber) :
        echo 'You guessed it!  What are the odds?!?' . PHP_EOL;
        break;

    default :
        echo 'Please enter a valid number';
        break;
}
