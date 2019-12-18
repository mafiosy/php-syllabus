<?php

include 'piglet.php';

$game = new Piglet();

$roll = readline('Roll again? ');

if ($roll == 'yes' || $roll == 'y'){
    while ($roll == 'yes' || $roll == 'y'){
        $game->playPiglet();
        $roll = readline('Roll again? ');

        if ($roll == 'no' || $roll == 'n') {
            echo 'You got ' . $game->points . ' points' . PHP_EOL;
            exit;
        }
    }
}
elseif ($roll == 'no' || $roll == 'n'){
    echo 'You got ' . $game->points . ' points' . PHP_EOL;
    exit;
} else {
    echo 'Unknown command' . PHP_EOL;
    exit;
}

