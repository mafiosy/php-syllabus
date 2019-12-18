<?php

class Point
{
    public function __construct(int $pX, int $pY)
    {
        $this->Xval = $pX;
        $this->Yval = $pY;
    }

    public function swap_points(Point $pointToSwap)
    {
        $temp = $this->Xval;
        $this->Xval = $pointToSwap->Xval;
        $pointToSwap->Xval = $temp;

        $temp = $this->Yval;
        $this->Yval = $pointToSwap->Yval;
        $pointToSwap->Yval = $temp;
    }
}