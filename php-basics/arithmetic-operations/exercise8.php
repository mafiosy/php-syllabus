<?php

class EmployeePayment
{

    public function getPay(float $basePay, int $hoursWorked)
    {
        if ($basePay < 8)
        {
            echo 'Error: Minimum hourly wage is $8.00' . PHP_EOL;
        }
        if ($hoursWorked < 0 || $hoursWorked > 60)
        {
            echo 'Error: Enter valid hours' . PHP_EOL;
        }
        if ($basePay >= 8 && $hoursWorked > 0 && $hoursWorked < 60)
        {
            if ($hoursWorked > 40)
            {
                $overtime = $hoursWorked -40;
                $payment = $basePay * 40 + ($overtime * ($basePay * 1.5));
                echo $this->name . ' got paid $' . $payment . PHP_EOL;
            }
            if ($hoursWorked <= 40)
            {
                $payment = $basePay * 40;
                echo $this->name . ' got paid $' . $payment . PHP_EOL;
            }
        }
    }

}

class Employee extends EmployeePayment
{
    public function __construct(string $name, float $basePay, int $hoursWorked)
    {
        $this->name = $name;
        $this->basepay = $basePay;
        $this->hoursworked = $hoursWorked;
    }

    public function getPaid()
    {
        $this->getPay($this->basepay, $this->hoursworked);
    }

}

$employee1 = new Employee('Employee 1', 7.5, 35);
$employee2 = new Employee('Employee 2', 8.2, 47);
$employee3 = new Employee('Employee 3', 10, 73);

$employee1->getPaid();
$employee2->getPaid();
$employee3->getPaid();