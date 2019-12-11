<?php

include 'exercise10.php';

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";

$userChoice = readline("Enter your choice (1-4) : ");

if ($userChoice >= 1 && $userChoice <= 4) {
    switch ($userChoice) {
        case ($userChoice == 1) :
            $r = readline("\nEnter the radius (an integer) in centimeters of the Circle: ");
            $area = new Geometry();
            $area->getAreaOfCircle($r);
            break;

        case ($userChoice == 2) :
            $l = readline("\nEnter the length (an integer) in centimeters of the Rectangle: ");
            $w = readline("\nEnter the width (an integer) in centimeters of the Rectangle: ");
            $area = new Geometry();
            $area->getAreaOfRectangle($l, $w);
            break;

        case ($userChoice == 3) :
            $b = readline("\nEnter the base (an integer) in centimeters of the Triangle: ");
            $h = readline("\nEnter the height (an integer) in centimeters of the Triangle: ");
            $area = new Geometry();
            $area->getAreaOfTriangle($b, $h);
            break;

        case ($userChoice == 4) :
            echo 'Good bye!' . PHP_EOL;
            break;

    }
} else {
    echo 'Error: Invalid choice' . PHP_EOL;
}