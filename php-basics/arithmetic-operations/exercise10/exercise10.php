<?php

class Geometry
{
    public function getAreaOfCircle(int $radius)
    {
        if ($radius > 0 ){
            $areaOfCircle = M_PI * pow($radius, 2);
            echo 'Area of Circle is: ' . round($areaOfCircle, 2) . 'cm.'. PHP_EOL;
        } else {
            echo 'Error: Negative value used' . PHP_EOL;
        }

    }

    public function getAreaOfRectangle(int $length, int $width)
    {
        if ($length > 0 || $width > 0){
            $areaOfRectangle = $length * $width;
            echo 'Area of Rectangle is: ' . round($areaOfRectangle, 2) . 'cm.' . PHP_EOL;
        } else {
            echo 'Error: Negative value used' . PHP_EOL;
        }

    }

    public function getAreaOfTriangle(int $base, int $height)
    {
        if ($base > 0 || $height > 0){
            $areaOfTriangle = $base * $height * 0.5;
            echo 'Area of Triangle is: ' . round($areaOfTriangle, 2) . 'cm.' . PHP_EOL;
        } else {
            echo 'Error: Negative value used' . PHP_EOL;
        }

    }
}