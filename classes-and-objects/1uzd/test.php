<?php

include "1.php";

$newProd1 = new Product("Logitech mouse", 70.00, 14);
$newProd2 = new Product("iPhone 5s", 999.99, 3);
$newProd3 = new Product("Epson EB-U05", 440.46, 1);

$newProd1->print_product();
$newProd2->print_product();
$newProd3->print_product();

echo PHP_EOL;

$newProd1->change_product_quantity(123);
$newProd2->change_product_quantity(456);
$newProd3->change_product_quantity(789);

echo PHP_EOL;

$newProd1->change_product_price(1.23);
$newProd2->change_product_price(4.56);
$newProd3->change_product_price(7.89);

echo PHP_EOL;

$newProd1->print_product();
$newProd2->print_product();
$newProd3->print_product();