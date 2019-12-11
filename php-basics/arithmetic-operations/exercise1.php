<?php

function fifteen(int $num1, int $num2): bool
{
    if ($num1 === 15 || $num2 === 15 || $num1 + $num2 === 15 || $num1 - $num2 === 15 || $num2 - $num1 === 15)
    {
        return true;
    } else {
        return false;
    }

}

var_dump(fifteen(14, 29));