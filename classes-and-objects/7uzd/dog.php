<?php

class Dog
{
    private $name;
    private $sex;
    private $mother;
    private $father;

    public function __construct(string $name, string $sex, string $mother, string $father)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function fathersName(): string
    {
        if ($this->father == null)
        {
            return 'Unknown';
        }
        else
        {
            return $this->father;
        }
    }

    public function hasSameMotherAs($dog): bool
    {
        if ($this->mother == $dog->mother)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

class DogTest
{
    public function Main(): void
    {
        $max = new Dog('Max', 'male', 'Lady', 'Rocky');
        $rocky = new Dog('Rocky', 'male', 'Molly', 'Buster');
        $sparky = new Dog('Rocky', 'male', '', '');
        $buster = new Dog('Buster', 'male', 'Lady', 'Sparky');
        $sam = new Dog('Sam', 'male', '', '');
        $lady = new Dog('Lady', 'female', '', '');
        $molly = new Dog('Molly', 'female', '', '');
        $coco = new Dog('Coco', 'female', 'Molly', 'Buster');

        echo $coco->fathersName() . PHP_EOL;
        echo $sparky->fathersName() . PHP_EOL;

        if ($coco->hasSameMotherAs($rocky) == true)
        {
            echo  'true'. PHP_EOL;
        }
        else
        {
            echo 'false' . PHP_EOL;
        }


    }
}

$example = new DogTest();
$example->Main();