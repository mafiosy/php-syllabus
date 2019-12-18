<?php

class FuelGauge
{
    public function __construct(int $fuel)
    {
        $this->fuel = $fuel;
    }

    public function reportFuel()
    {
        echo 'The car currently has ' . $this->fuel . ' liters in tank.' . PHP_EOL;
    }

    public function incrementFuel()
    {
        if ($this->fuel < 70){
            $this->fuel += 1;
        } else {
            echo 'Your cars tank cant hold that much fuel.' . PHP_EOL;
            exit;
        }

    }

    public function decrementFuel()
    {
        if ($this->fuel > 0){
            $this->fuel -= 1;
        } else {
            echo 'Your car is out of fuel';
        }

    }

}