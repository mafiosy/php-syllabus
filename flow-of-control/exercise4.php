<?php

$dayNumber = 3;

$array = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

//nested if variant

if ($dayNumber > 0 && $dayNumber < 8){
    if ($dayNumber == 1){
        echo PHP_EOL . 'Monday' . PHP_EOL;
    }
    if ($dayNumber == 2){
        echo PHP_EOL . 'Tuesday' . PHP_EOL;
    }
    if ($dayNumber == 3){
        echo PHP_EOL . 'Wednesday' . PHP_EOL;
    }
    if ($dayNumber == 4){
        echo PHP_EOL . 'Thursday' . PHP_EOL;
    }
    if ($dayNumber == 5){
        echo PHP_EOL . 'Friday' . PHP_EOL;
    }
    if ($dayNumber == 6){
        echo PHP_EOL . 'Saturday' . PHP_EOL;
    }
    if ($dayNumber == 7){
        echo PHP_EOL . 'Sunday' . PHP_EOL;
    }
} else {
    echo PHP_EOL . 'Not a valid day.' . PHP_EOL;
}

//switch case default variant

switch ($dayNumber){
    case ($dayNumber == 1) :
        echo PHP_EOL . 'Monday' . PHP_EOL;
        break;

    case ($dayNumber == 2) :
        echo PHP_EOL . 'Tuesday' . PHP_EOL;
        break;

    case ($dayNumber == 3) :
        echo PHP_EOL . 'Wednesday' . PHP_EOL;
        break;

    case ($dayNumber == 4) :
        echo PHP_EOL . 'Thursday' . PHP_EOL;
        break;

    case ($dayNumber == 5) :
        echo PHP_EOL . 'Friday' . PHP_EOL;
        break;

    case ($dayNumber == 6) :
        echo PHP_EOL . 'Saturday' . PHP_EOL;
        break;

    case ($dayNumber == 7) :
        echo PHP_EOL . 'Sunday' . PHP_EOL;
        break;

    default :
        echo PHP_EOL . 'Not a valid day.' . PHP_EOL;
}