<?php

$board = [
     [' - ', ' - ', ' - '],
     [' - ', ' - ', ' - '],
     [' - ', ' - ', ' - ']
];

$X = ' X ';
$O = ' O ';

$moveCharacter = $X;
$moveCounter = 1;

for ($i = 0; $i < 10; $i++){
    anotherTry:
//asks for user input, takes input string and explodes it into array
    echo PHP_EOL . "'" . $moveCharacter . "'" . " choose your location (row, column)";
    $move = readline(': ');
    echo PHP_EOL;
    $moveArray = explode(' ', $move);
//saves first input array element to $row and second to $column
    $row = $moveArray[0];
    $column = $moveArray[1];
//checks if cell is already written, if not proceed to change it to X or O depending on turn, if yes echo error and
//return to user to input coordinates
    if ($board[$row][$column] == ' - '){
        $board[$row][$column] = $moveCharacter;
    } else {
        echo PHP_EOL . 'Cell occupied, try another.' . PHP_EOL;
        goto anotherTry;
    }

//draws board
    for ($i = 0; $i < count($board); $i++){
        for ($j = 0; $j < count($board[$i]); $j++){
            echo $board[$i][$j];
        }
        echo PHP_EOL;
    }
//runs function that checks for victory
    checkFor_XorO_Win($moveCharacter, $board);
//counts moves and changes turns for X or O depending on who went last
    $moveCounter++;
    if ($moveCounter % 2 === 0){
        $moveCharacter = $O;
    } else {
        $moveCharacter = $X;
    }
//checks for tie
    if ($moveCounter == 10 ){
        echo PHP_EOL . 'The game is a tie.' . PHP_EOL;
        exit;
    }

}
//function containing every winning scenario
function checkFor_XorO_Win($XorO, $board)
{
    if ($board[0][0] == $XorO && $board[0][1] == $XorO && $board[0][2] == $XorO){
        echo PHP_EOL . $XorO . ' wins!' . PHP_EOL;
        exit;
    }
    if ($board[1][0] == $XorO && $board[1][1] == $XorO && $board[1][2] == $XorO){
        echo PHP_EOL . $XorO . ' wins!' . PHP_EOL;
        exit;
    }
    if ($board[2][0] == $XorO && $board[2][1] == $XorO && $board[2][2] == $XorO){
        echo PHP_EOL . $XorO . ' wins!' . PHP_EOL;
        exit;
    }
    if ($board[0][0] == $XorO && $board[1][0] == $XorO && $board[2][0] == $XorO){
        echo PHP_EOL . $XorO . ' wins!' . PHP_EOL;
        exit;
    }
    if ($board[0][1] == $XorO && $board[1][1] == $XorO && $board[2][1] == $XorO){
        echo PHP_EOL . $XorO . ' wins!' . PHP_EOL;
        exit;
    }
    if ($board[0][2] == $XorO && $board[1][2] == $XorO && $board[2][2] == $XorO){
        echo PHP_EOL . $XorO . ' wins!' . PHP_EOL;
        exit;
    }
    if ($board[0][0] == $XorO && $board[1][1] == $XorO && $board[2][2] == $XorO){
        echo PHP_EOL . $XorO . ' wins!' . PHP_EOL;
        exit;
    }
    if ($board[0][2] == $XorO && $board[1][1] == $XorO && $board[2][0] == $XorO){
        echo PHP_EOL . $XorO . ' wins!' . PHP_EOL;
        exit;
    }

}