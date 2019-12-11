<?php

// program accepts weight in kg as $argv[1] and height in m as $argv[2]

echo 'Your entered weight is ' . $argv[1] . 'kg ' . 'and height ' . $argv[2] . PHP_EOL;

if($argv[1] > 0 && $argv[2] > 0){
    $weightInPounds = $argv[1] / 0.45359237;
    $heightInInches = $argv[2] / 0.0254;
} else {
    echo 'Error' . PHP_EOL;
    return 0;
}

$bmi = ($weightInPounds * 703) / (pow($heightInInches, 2));

if ($bmi < 18.5){
    echo 'You`re underweight.' . PHP_EOL;
}
if ($bmi > 25){
    echo 'You`re overweight' . PHP_EOL;
}
if ($bmi > 18.5 && $bmi < 25){
    echo 'You`re weight is optimal' . PHP_EOL;
}
