<?php

class NumberSquare
{
    public function numSq()
    {
        $min = readline('Min? ');
        $max = readline('Max? ');

        $minVar1 = intval($min);
        $minVar2 = intval($min);

        for ($i = 0; $i < $max; $i++)
        {
            for ($j = 0; $j < $max; $j++){
                echo $minVar1;
                $minVar1++;

                if ($minVar1 > $max){
                    $minVar1 = $min;
                }
            }
            echo PHP_EOL;

            if ($minVar2 == $max){
                $minVar2 = $min;
            }
            $minVar2++;
            $minVar1 = $minVar2;

        }
    }

}