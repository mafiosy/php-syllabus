<?php

include "fuel-gauge.php";

class Odometer
{
    public function __construct(int $km)
    {
        $this->kilometers = $km;
    }

    public function reportKm()
    {
        echo 'The car currently has ' . $this->kilometers . ' kilometers on odometer.' . PHP_EOL;
    }

    public function incrementKm()
    {
        $this->kilometers += 1;

        if ($this->kilometers > 999999)
        {
            $this->kilometers = 0;
        }
    }

    public function drive(FuelGauge $fuel)
    {
        $fuelEconomy = 0;

        while ($fuel->fuel > 0)
        {
            $this->incrementKm();
            $fuelEconomy++;

            $fuel->reportFuel();
            $this->reportKm();
            echo PHP_EOL;

            if ($fuelEconomy == 10)
            {
                $fuel->decrementFuel();
                $fuelEconomy = 0;
            }
        }


    }

}