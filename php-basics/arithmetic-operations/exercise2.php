<?php

function CheckOddEven(int $number)
{
    if ($number % 2 === 0)
    {
        echo 'Even number';
    } else {
        echo 'Odd number';
    }
    echo PHP_EOL . 'bye!' . PHP_EOL;
}

CheckOddEven(168);