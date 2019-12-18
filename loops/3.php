<?php

$firstWord = readline('Enter first word: ');
$secondWord = readline('Enter second word: ');

$firstW = strlen($firstWord);
$secondW = strlen($secondWord);

$numOfDots = (30 - ($firstW + $secondW));


echo $firstWord;
for ($i = 0; $i < $numOfDots; $i++){
    echo '.';
}
echo $secondWord;
