<?php

$array = [];

for ($i = 0; $i < 10; $i++){
    $array[] = rand(1, 100);
}

$copyOfArray = $array;

$array[count($array) - 1] = -7;

echo PHP_EOL . 'Array 1: ';
for ($i = 0; $i < count($array); $i++){
    echo $array[$i] . ' ';
}

echo PHP_EOL . 'Array 2: ';
for ($i = 0; $i < count($copyOfArray); $i++){
    echo $copyOfArray[$i] . ' ';
}