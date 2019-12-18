<?php

class FizzBuzz
{
    public function __construct(int $number)
    {
        $this->drawAll($number);
    }

    public function drawAll($number)
    {
        $elementsInRow = 0;
        for ($i = 1; $i < $number; $i++){
            if (($i % 3) == 0 && ($i % 5) == 0){
                echo 'FizzBuzz ';
            }
            elseif (($i % 3) == 0){
                echo 'Fizz ';
            }
            elseif (($i % 5) == 0){
                echo 'Buzz ';
            }
            else {
                echo $i . ' ';
            }
            $elementsInRow++;
            if ($elementsInRow > 19){
                $elementsInRow = 0;
                echo PHP_EOL;
            }
        }

    }
}