<?php

$array = [];

echo "Input the 1st number: ";
$firstnumber = readline(' ');
$array[] = $firstnumber;

echo PHP_EOL . "Input the 2nd number: ";
$secondnumber = readline(' ');
$array[] = $secondnumber;

echo PHP_EOL . "Input the 3rd number: ";
$thirdnumber = readline(' ');
$array[] = $thirdnumber;

//todo print the largest number

echo PHP_EOL . max($array) . PHP_EOL;