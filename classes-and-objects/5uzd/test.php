<?php

include 'date.php';

$date = new Date(12, 14, 2019);

echo $date->displayDate() . PHP_EOL;

echo $date->getMonth() . ' ' . $date->getDay() . ' ' . $date->getYear();

$date->setMonth(7);
$date->setDay(7);
$date->setYear(2077);

echo PHP_EOL . $date->displayDate() . PHP_EOL;

echo $date->getMonth() . ' ' . $date->getDay() . ' ' . $date->getYear();