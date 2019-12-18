<?php

//PhoneKeyPad

$string = readline('Enter a string: ');

$clearedString = preg_replace('/\s+/', '', $string);

$lowercaseString = strtolower($clearedString);

$arrayOfString = str_split($lowercaseString);

//nested if variant

for ($i = 0; $i < count($arrayOfString); $i++){
    if ($arrayOfString[$i] == 'a' || $arrayOfString[$i] == 'b' || $arrayOfString[$i] == 'c'){
        if ($arrayOfString[$i] == 'a'){
            echo '2 ';
        }
        if ($arrayOfString[$i] == 'b'){
            echo '22 ';
        }
        if ($arrayOfString[$i] == 'c'){
            echo '222 ';
        }
    }
    if ($arrayOfString[$i] == 'd' || $arrayOfString[$i] == 'e' || $arrayOfString[$i] == 'f'){
        if ($arrayOfString[$i] == 'd'){
            echo '3 ';
        }
        if ($arrayOfString[$i] == 'e'){
            echo '33 ';
        }
        if ($arrayOfString[$i] == 'f'){
            echo '333 ';
        }
    }
    if ($arrayOfString[$i] == 'g' || $arrayOfString[$i] == 'h' || $arrayOfString[$i] == 'i'){
        if ($arrayOfString[$i] == 'g'){
            echo '4 ';
        }
        if ($arrayOfString[$i] == 'h'){
            echo '44 ';
        }
        if ($arrayOfString[$i] == 'i'){
            echo '444 ';
        }
    }
    if ($arrayOfString[$i] == 'j' || $arrayOfString[$i] == 'k' || $arrayOfString[$i] == 'l'){
        if ($arrayOfString[$i] == 'j'){
            echo '5 ';
        }
        if ($arrayOfString[$i] == 'k'){
            echo '55 ';
        }
        if ($arrayOfString[$i] == 'l'){
            echo '555 ';
        }
    }
    if ($arrayOfString[$i] == 'm' || $arrayOfString[$i] == 'n' || $arrayOfString[$i] == 'o'){
        if ($arrayOfString[$i] == 'm'){
            echo '6 ';
        }
        if ($arrayOfString[$i] == 'n'){
            echo '66 ';
        }
        if ($arrayOfString[$i] == 'o'){
            echo '666 ';
        }
    }
    if ($arrayOfString[$i] == 'p' || $arrayOfString[$i] == 'q' || $arrayOfString[$i] == 'r'|| $arrayOfString[$i] == 's'){
        if ($arrayOfString[$i] == 'p'){
            echo '7 ';
        }
        if ($arrayOfString[$i] == 'q'){
            echo '77 ';
        }
        if ($arrayOfString[$i] == 'r'){
            echo '777 ';
        }
        if ($arrayOfString[$i] == 's'){
            echo '7777 ';
        }
    }
    if ($arrayOfString[$i] == 't' || $arrayOfString[$i] == 'u' || $arrayOfString[$i] == 'v'){
        if ($arrayOfString[$i] == 't'){
            echo '8 ';
        }
        if ($arrayOfString[$i] == 'u'){
            echo '88 ';
        }
        if ($arrayOfString[$i] == 'v'){
            echo '888 ';
        }
    }
    if ($arrayOfString[$i] == 'w' || $arrayOfString[$i] == 'x' || $arrayOfString[$i] == 'y'|| $arrayOfString[$i] == 'z'){
        if ($arrayOfString[$i] == 'w'){
            echo '9 ';
        }
        if ($arrayOfString[$i] == 'x'){
            echo '99 ';
        }
        if ($arrayOfString[$i] == 'y'){
            echo '999 ';
        }
        if ($arrayOfString[$i] == 'z'){
            echo '9999 ';
        }
    }
}

echo PHP_EOL;

for ($i = 0; $i < count($arrayOfString); $i++){
    switch ($arrayOfString[$i]){
        case ($arrayOfString[$i] == 'a' || $arrayOfString[$i] == 'b' || $arrayOfString[$i] == 'c') :
            switch ($arrayOfString[$i]){
                case ($arrayOfString[$i] == 'a') :
                    echo '2 ';
                    break;
                case ($arrayOfString[$i] == 'b') :
                    echo '22 ';
                    break;
                case ($arrayOfString[$i] == 'c') :
                    echo '222 ';
                    break;
            }
            break;

        case ($arrayOfString[$i] == 'd' || $arrayOfString[$i] == 'e' || $arrayOfString[$i] == 'f') :
            switch ($arrayOfString[$i]){
                case ($arrayOfString[$i] == 'd') :
                    echo '3 ';
                    break;
                case ($arrayOfString[$i] == 'e') :
                    echo '33 ';
                    break;
                case ($arrayOfString[$i] == 'f') :
                    echo '333 ';
                    break;
            }
            break;

        case ($arrayOfString[$i] == 'g' || $arrayOfString[$i] == 'h' || $arrayOfString[$i] == 'i') :
            switch ($arrayOfString[$i]){
                case ($arrayOfString[$i] == 'g') :
                    echo '4 ';
                    break;
                case ($arrayOfString[$i] == 'h') :
                    echo '44 ';
                    break;
                case ($arrayOfString[$i] == 'i') :
                    echo '444 ';
                    break;
            }
            break;

        case ($arrayOfString[$i] == 'j' || $arrayOfString[$i] == 'k' || $arrayOfString[$i] == 'l') :
            switch ($arrayOfString[$i]){
                case ($arrayOfString[$i] == 'j') :
                    echo '5 ';
                    break;
                case ($arrayOfString[$i] == 'k') :
                    echo '55 ';
                    break;
                case ($arrayOfString[$i] == 'l') :
                    echo '555 ';
                    break;
            }
            break;

        case ($arrayOfString[$i] == 'm' || $arrayOfString[$i] == 'n' || $arrayOfString[$i] == 'o') :
            switch ($arrayOfString[$i]){
                case ($arrayOfString[$i] == 'm') :
                    echo '6 ';
                    break;
                case ($arrayOfString[$i] == 'n') :
                    echo '66 ';
                    break;
                case ($arrayOfString[$i] == 'o') :
                    echo '666 ';
                    break;
            }
            break;

        case ($arrayOfString[$i] == 'p' || $arrayOfString[$i] == 'q' || $arrayOfString[$i] == 'r'|| $arrayOfString[$i] == 's') :
            switch ($arrayOfString[$i]){
                case ($arrayOfString[$i] == 'p') :
                    echo '7 ';
                    break;
                case ($arrayOfString[$i] == 'q') :
                    echo '77 ';
                    break;
                case ($arrayOfString[$i] == 'r') :
                    echo '777 ';
                    break;
                case ($arrayOfString[$i] == 's') :
                    echo '7777 ';
                    break;
            }
            break;

        case ($arrayOfString[$i] == 't' || $arrayOfString[$i] == 'u' || $arrayOfString[$i] == 'v') :
            switch ($arrayOfString[$i]){
                case ($arrayOfString[$i] == 't') :
                    echo '8 ';
                    break;
                case ($arrayOfString[$i] == 'u') :
                    echo '88 ';
                    break;
                case ($arrayOfString[$i] == 'v') :
                    echo '888 ';
                    break;
            }
            break;

        case ($arrayOfString[$i] == 'w' || $arrayOfString[$i] == 'x' || $arrayOfString[$i] == 'y'|| $arrayOfString[$i] == 'z') :
            switch ($arrayOfString[$i]){
                case ($arrayOfString[$i] == 'w') :
                    echo '9 ';
                    break;
                case ($arrayOfString[$i] == 'x') :
                    echo '99 ';
                    break;
                case ($arrayOfString[$i] == 'y') :
                    echo '999 ';
                    break;
                case ($arrayOfString[$i] == 'z') :
                    echo '9999 ';
                    break;
            }
            break;
    }
}