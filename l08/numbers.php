<?php

while (true) {
    $number = (int)readline('Enter your number: ');

    $realNumber = random_int(1, 10);

    echo $realNumber == $number ? 'You WIN' : 'You LOSE';
    echo PHP_EOL;

    $continue = strtolower(readline('Plsy again'))
}








$data = [1, 2, 5, 7, 9];


do {
    $number = random_int(1, 10);
    var_dump($number);
} while(in_array($number, $data));