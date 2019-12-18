<?php

include 'savings-acc.php';

$balance = readline('How much money is in the account?: ');
$interestRate = readline('Enter the annual interest rate: ');
$months = readline('How long the account has been opened?: ');

$account = new SavingsAccount($balance, $interestRate);

if ($months > 0)
{
    $interest = 0;
    $withdrawn = 0;
    $deposited = 0;

    for ($i = 1; $i <= $months; $i++)
    {
        $deposit = readline('Enter amount deposited for month: ' . $i .': ');
        $account->deposit($deposit);
        $withdraw = readline('Enter amount withdrawn for month: ' . $i . ': ');
        $account->withdraw($withdraw);

        $deposited += intval($deposit);
        $withdrawn += intval($withdraw);
        $balanceBeforeInterest = $account->balance;
        $interest += $account->addMonthlyInterest() - $balanceBeforeInterest;
    }
    echo 'Total deposited: $' . number_format((float)$deposited, 2, '.', ',') . PHP_EOL;
    echo 'Total withdrawn: $' . number_format((float)$withdrawn, 2, '.', ',') . PHP_EOL;
    echo 'Interest earned: $' . number_format((float)$interest, 2, '.', ',') . PHP_EOL;
    echo 'Ending balance: $' . number_format((float)$account->balance, 2, '.', ',') . PHP_EOL;
} else {
    echo 'Invalid amount of months';
    exit;
}