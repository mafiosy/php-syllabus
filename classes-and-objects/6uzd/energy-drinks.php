<?php

//programma divreiz izprinte tekstu, ar divos dazados variantos noraditiem variables/functions

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculate_energy_drinkers(int $numberSurveyed, float $numberPurchasedEnergyDrinks)
{
    return round($numberSurveyed * $numberPurchasedEnergyDrinks);

    //throw new LogicException(";(");
}

function calculate_prefer_citrus(float $numberPreferCitrusDrinks)
{
    return $numberPreferCitrusDrinks * 100;

    //throw new LogicException(";(");
}


echo "Total number of people surveyed " . $surveyed . PHP_EOL;
echo "Approximately " . round($surveyed * $purchased_energy_drinks) . " bought at least one energy drink." . PHP_EOL;
echo ($prefer_citrus_drinks * 100) . "% of those " . "prefer citrus flavored energy drinks." . PHP_EOL;

echo PHP_EOL . "Total number of people surveyed " . $surveyed . PHP_EOL;
echo "Approximately " . calculate_energy_drinkers($surveyed, $purchased_energy_drinks) . " bought at least one energy drink." . PHP_EOL;
echo calculate_prefer_citrus($prefer_citrus_drinks) . "% of those " . "prefer citrus flavored energy drinks." . PHP_EOL;
