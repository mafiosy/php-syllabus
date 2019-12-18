<?php

include "bank-account.php";

$ben = new BankAccount('Benson', 17.25);
$alex = new BankAccount('Alexander', 17);
$rob = new BankAccount('Robert', 0);
$rich = new BankAccount('Richard', -17.5);

echo $ben->show_user_name_and_balance() . PHP_EOL;
echo $alex->show_user_name_and_balance() . PHP_EOL;
echo $rob->show_user_name_and_balance() . PHP_EOL;
echo $rich->show_user_name_and_balance() . PHP_EOL;

echo $ben;