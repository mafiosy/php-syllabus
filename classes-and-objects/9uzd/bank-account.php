<?php

class BankAccount
{
    private $name;
    private $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function show_user_name_and_balance(): string
    {
        $strBalance = strval($this->balance);

        if ($this->balance < 0)
        {
            $absoluteBalance = abs($this->balance);
            return $this->name . ', -$' . number_format((float)$absoluteBalance, 2, '.', ',');
        }
        else {
            return $this->name . ', $' . number_format((float)$strBalance, 2, '.', ',');
        }
    }
}
