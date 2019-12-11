<?php

$a = -9.81;
$t = 10;
$vi = 0;
$xi = 0;

$position = 0.5 * ($a * pow($t, 2)) + $vi + $xi;

echo $position . 'm' . PHP_EOL;