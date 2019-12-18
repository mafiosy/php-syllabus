<?php

include "bank-acc.php";

class TestBankAcc
{
    public function main()
    {
        $matt = new Account("Matt's account", 100);
        $me = new Account("My account", 0);

        echo "Initial state" . PHP_EOL;
        echo $matt->getBalance() . PHP_EOL;
        echo $me->getBalance() . PHP_EOL;

        $matt->withdraw(100);
        $me->deposit(100);

        echo "Final state" . PHP_EOL;
        echo $matt->balance . PHP_EOL;
        echo $me->balance . PHP_EOL;
        echo "///////////////////////////////////" .PHP_EOL;

        $a = new Account('A', 100);
        $b = new Account('B', 0);
        $c = new Account('C', 0);

        echo 'a: $' . $a->balance . PHP_EOL;
        echo 'b: $' . $b->balance . PHP_EOL;
        echo 'c: $' . $c->balance . PHP_EOL . PHP_EOL;

        $this->transfer($a, $b, 50);
        echo 'a: $' . $a->balance . PHP_EOL;
        echo 'b: $' . $b->balance . PHP_EOL;
        echo 'c: $' . $c->balance . PHP_EOL . PHP_EOL;

        $this->transfer($b, $c, 25);
        echo 'a: $' . $a->balance . PHP_EOL;
        echo 'b: $' . $b->balance . PHP_EOL;
        echo 'c: $' . $c->balance . PHP_EOL . PHP_EOL;
    }

    public function transfer(Account $test1, Account $test2, float $amount)
    {
        $test1->withdraw($amount);
        $test2->deposit($amount);
    }
}

$test1 = new TestBankAcc();
$test1->main();