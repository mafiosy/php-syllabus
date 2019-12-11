<?php

//exercise 6

$lowerBound = 1;

$upperBound = 110;

$characterPerLine = 0;

for ($i = $lowerBound; $i <= $upperBound; $i++){

    if (fmod($i, 3) != 0 && fmod($i, 5) != 0 && fmod($i, 7) != 0){
        echo $i . ' ';
    }

    if (fmod($i, 3) == 0 && fmod($i, 5) == 0 && fmod($i, 7) == 0){
        echo 'CozaLozaWoza ';
    }

    if (fmod($i, 3) == 0 && fmod($i, 5) == 0){
        echo 'CozaLoza ';
    }

    if (fmod($i, 5) == 0 && fmod($i, 7) == 0){
        echo 'LozaWoza ';
    }

    if (fmod($i, 3) == 0 && fmod($i, 7) == 0){
        echo 'CozaWoza ';
    }
    if (fmod($i, 3) == 0){
        echo 'Coza ';
        //var_dump(fmod(1, 3));
    }
    if (fmod($i, 5) == 0){
        echo 'Loza ';
    }
    if (fmod($i, 7) == 0){
        echo 'Woza ';
    }
    $characterPerLine++;
    if ($characterPerLine == 11){
        echo PHP_EOL;
        $characterPerLine = 0;
    }

}