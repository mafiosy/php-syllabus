<?php

class Account
{
    public $accountName;
    public $balance;

    public function __construct(string $accName, float $balance)
    {
        $this->accountName = $accName;
        $this->balance = $balance;
    }

    public function withdraw(float $withdrawnAmount)
    {
        return $this->balance -= $withdrawnAmount;
    }

    public function deposit(float $depositAmount)
    {
        return $this->balance += $depositAmount;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}