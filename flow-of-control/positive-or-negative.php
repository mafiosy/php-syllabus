<?php

echo "Enter the number.";
$number = readline(' ');

//todo print if number is positive or negative

if ($number > 0){
    echo PHP_EOL . 'Positive' . PHP_EOL;
}
elseif ($number < 0){
    echo PHP_EOL . 'Negative' . PHP_EOL;
} else {
    echo PHP_EOL . 'Neither Positive or Negative' . PHP_EOL;
}