<?php

class Product
{
    public function __construct(string $name, float $price_at_start, int $amount_at_start)
    {
        $this->name = $name;
        $this->price_at_start = $price_at_start;
        $this->amount_at_start = $amount_at_start;
    }

    public function print_product()
    {
        echo $this->name . ', price ' . $this->price_at_start . ', amount ' . $this->amount_at_start . PHP_EOL;
    }

    public function change_product_quantity(int $newQuantity)
    {
        $this->amount_at_start = $newQuantity;
        echo $this->name . ' quantity set to ' . $newQuantity . PHP_EOL;
    }

    public function change_product_price(float $newPrice)
    {
        $this->price_at_start = $newPrice;
        echo $this->name . ' price set to ' . $newPrice . PHP_EOL;
    }
}