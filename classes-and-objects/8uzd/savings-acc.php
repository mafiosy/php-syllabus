<?php

class SavingsAccount
{
    public $balance;
    private $interestRate;

    public function __construct(float $balance, float $interestRate)
    {
        $this->balance = $balance;
        $this->interestRate = $interestRate;
    }

    public function withdraw(float $amountToWithdraw)
    {
        return $this->balance -= $amountToWithdraw;
    }

    public function deposit(float $amountToDeposit)
    {
        return $this->balance += $amountToDeposit;
    }

    public function addMonthlyInterest()
    {
        return $this->balance += $this->balance * ($this->interestRate / 12);
    }
}