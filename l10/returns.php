<?php

function getNumbers(int $min, int $max, bool $evensOnly = false): array
{
    $numbers = range($min, $max);
    if ($evensOnly) {
        $numbers = array_filter($numbers, fn ($number) => $number % 2 === 0);
//            $numbers = array_filter($numbers, function  ($number) {
//                return $number % 2 === 0;
//            }));
    }

    return $numbers;
}

$numbers = getNumbers(5,19);
var_dump($numbers);

$evens = getNumbers(5, 19, true);
var_dump($evens);































function myNumbers($min, $max, bool $r1 =false): array
{
$zaq = range($min, $max);
if ($r1) {
    $zaq = array_filter($zaq, fn($z) => $z % 3 === 0);
}
return $zaq;
}

$zaq = myNumbers(2,100);
var_dump($zaq);

$r1 = myNumbers(2, 100, true);
var_dump($r1);
