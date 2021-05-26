<?php

declare(strict_types=1);

function hello(string $name,int $age,string $gender, string $greeting = 'Helllo')
{
    echo "hello, {$gender} {$name}, {$age} years old<br>";
}

$users = [
    ['name' => 'Roman', 'age' => 27, 'gender' => 'male'],
    ['name' => 'Andrev', 'age' => 32, 'gender' => 'male'],
    ['name' => 'Ostap', 'age' => 43, 'gender' => 'male', 'greeting' => 'Hi'],
    ['name' => 'Ivan', 'age' => 21, 'gender' => 'male'],
    ['name' => 'Hanna', 'age' => 43, 'gender' => 'famle', 'greeting' => 'Хаюшки'],
];

foreach ($users as $user) {
    if (array_key_exists('greeting', $user)) {
        hello($user['name'], $user['age'], $user['gender'], $user['greeting']);
    } else {
        hello($user['name'], $user['age'], $user['gender']);
    }
}


function test(string $p1 = 'p1', string $p2 = 'p2', string $p3 = 'p3')
{
    echo "{$p1}_{$p2}_{$p3}<br>";
}

test('data 1', 'P2 Changen'); //before php8
test(p2: 'P2 Changen'); // php8 and hugher


function sum(string $message, int ...$numbers)
{
    echo $message, array_sum($numbers), '<br>';
}

sum('Tada!', 1, 2, 3, 4, 5, 7, 21, 43);
