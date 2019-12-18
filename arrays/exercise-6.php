<?php
again:
$words = ['leviathan', 'supercalifragilisticexpialidocious', 'psychotomimetic', 'trichotillomania'];
//letter count-9                         34                           15                 16
$randFromWords = rand(0, 3);

$wordX = str_split($words[$randFromWords]);
//var_dump($wordX);

$blankWord = [];
$misses = [];

for ($i = 0; $i < count($wordX); $i++){
    $blankWord[$i] = ' _ ';
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////

echo 'HANGMAN' . PHP_EOL;

separatorLine($wordX);

blankWord($blankWord);

echo PHP_EOL . PHP_EOL;

for ($i = 0; count($wordX); $i++) {
    duplicateletter:
    $guess = readline('Enter a letter You would like to guess: ');

    if (in_array($guess, $wordX) == false){
        $misses[] = $guess;
    }

    for ($i = 0; $i < count($wordX); $i++){
        if ($wordX[$i] == $guess){
            $blankWord[$i] = ' ' . $guess . ' ';
        }
        elseif ($blankWord[$i] == $wordX[$i]){
            echo PHP_EOL . 'You`ve already guessed this letter, choose another.' . PHP_EOL;
            goto duplicateletter;
        }

    }

    separatorLine($wordX);

    blankWord($blankWord);
    /*echo 'blank ';
    var_dump($blankWord);
    echo PHP_EOL . 'word ';
    var_dump($wordX);
*/
    missedLetters($misses);

    echo PHP_EOL . PHP_EOL . 'Guess: ' . $guess . PHP_EOL . PHP_EOL;

    $implodedBlank = implode('', $blankWord);
    $implodedX = implode('', $wordX);
    $implodedBlank = preg_replace('/\s+/', '', $implodedBlank);
    var_dump($implodedBlank);
    var_dump($implodedX);

    if ($implodedBlank  == $implodedX){
        echo 'You`ve guessed the word!!!' . PHP_EOL;
        echo PHP_EOL . 'Play "again" or "quit"? ';

        $goAgainOrQuit = readline(' ');
        if ($goAgainOrQuit == 'again'){
            goto again;
        }
        if ($goAgainOrQuit == 'quit'){
            exit;
        }
    }
    if (count($misses) > 4){
        echo 'Uh oh, You`ve lost.' . PHP_EOL;
        echo PHP_EOL . 'Play "again" or "quit"? ';

        $goAgainOrQuit = readline(' ');
        if ($goAgainOrQuit == 'again'){
            goto again;
        }
        if ($goAgainOrQuit == 'quit'){
            exit;
        }
    }
    if ($blankWord  === $wordX){
        echo 'true';
    } else {
        echo 'false';
    }
}

function separatorLine($length)
{
    echo PHP_EOL;
    for ($i = 0; $i < count($length); $i++) {
        echo '-=-';
    }
}

function missedLetters($mL)
{
    echo PHP_EOL . PHP_EOL . 'Misses: ';
    for ($i = 0; $i < count($mL); $i++){
        if (in_array($mL[$i], $mL)){
            echo $mL[$i] . ' ';
        }
    }
}

function blankWord($bW)
{
    echo PHP_EOL . PHP_EOL . 'Word: ';
    for ($i = 0; $i < count($bW); $i++) {
        echo $bW[$i];
    }
}