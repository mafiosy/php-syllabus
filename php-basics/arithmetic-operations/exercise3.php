<?php

$lowerBound = 1;

$upperBound = 100;

$array[] = 0;

for ($i = $lowerBound; $i <= $upperBound; $i++) {
    $array[] = $i;
}

$average = ($lowerBound + $upperBound) / 2;

echo 'The sum of ' . $lowerBound . ' to ' . $upperBound . ' is ' . array_sum($array) . PHP_EOL;
echo 'The average is ' .  $average . PHP_EOL;