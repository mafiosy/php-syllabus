<?php

$factorial = 0;

function factorialOfN(int $number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
        $factorial = $factorial * $i;
    }
    return $factorial;
}

var_dump(factorialOfN(10));