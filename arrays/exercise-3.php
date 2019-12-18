<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$num = readline("Enter the value to search for: ");

//todo check if an array contains a value user entered

$index = array_search($num, $numbers);

if ($index === 0){
    echo $num . ' can be found with index: ' . $index . PHP_EOL;
    return;
}
if ($index != null){
    echo $num . ' can be found with index: ' . $index . PHP_EOL;
} else {
    echo 'Array doesnt contain this number.' . PHP_EOL;
}