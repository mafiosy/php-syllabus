<?php

class AsciiFigure
{
    const SIZE = 7;

    public function __construct()
    {

    }

    public function drawFigure(): void
    {
        if ($this::SIZE > 0 && $this::SIZE < 10 && $this::SIZE != 0) {
            $slashLeft = '////';
            $slashRight = '\\\\\\\\';
            $stars = '********';
            $starsTimes = 0;

            for ($j = $this::SIZE; $j > 0; $j--) {
                echo str_repeat($slashLeft, $j) . (($j < $this::SIZE) ? (str_repeat($stars, $starsTimes)) : null) . str_repeat($slashRight, $j) . PHP_EOL;

                $starsTimes++;
            }
        } else {
            echo 'Error: either negative size, lack of size or more than size 10.' . PHP_EOL;
        }
    }
}