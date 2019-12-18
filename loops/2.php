<?php

echo "Input number: ";
$x = readline(' ');
echo PHP_EOL . "Input number increment: ";
$n = readline(' ');
$power = $x;

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

for ($i = 1; $i < $n; $i++){

    $power = $power * $x;

}

echo PHP_EOL . $power . PHP_EOL;