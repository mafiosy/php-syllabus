<?php

include "odometer.php";

$gas = new FuelGauge(23);
$mileage = new Odometer(30000);

while ($gas->fuel < 70)
{
    $gas->incrementFuel();
}

$mileage->drive($gas);
$gas->reportFuel();