<?php

class Cat
{
    const START_LIVES = 9;

    static int $totaldistanceRunned = 0;
    var int $distanceRunned = 0;

    var string $furColor = 'Black';
    var string $name;
    var int $age;

    function run()
    {
        echo 'Static', self::$totaldistanceRunned, '<br>';
        echo 'Object ', $this->distanceRunned , '<br>';

        $this->initLives();
        echo "{$this->name} runs fast<br>";

        $runned = random_int(10, 100);

        self::$totaldistanceRunned += $runned;
        $this->distanceRunned += $runned;

        echo 'Static', self::$totaldistanceRunned, '<br>';
        echo 'Object ', $this->distanceRunned , '<br>';

        self::sayMiau();

        echo '---------------','<br>', '<br>';
    }

    function initLives(): void
    {
        echo self::START_LIVES . " Lives initiated for {$this->name}<br>";
    }

    static function sayMiau(): void
    {
//        var_dump($this->name);
        echo 'Miau', '<br>';
    }
}

var_dump(Cat::START_LIVES);

$cat1 = new Cat();
$cat1->furColor = 'Red';
$cat1->name = 'Murzik';
$cat1->age = '7';

$cat2 = new Cat();
$cat2->furColor = 'White';
$cat2->name = 'Murka';
$cat2->age = '12';

var_dump($cat1, $cat2);

$cat1->run();

$cat2->run();
Cat::sayMiau();

