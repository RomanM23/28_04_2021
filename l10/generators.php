<?php

function getNumbers(int $min, int $max): Generator
{
    for (; $min <= $max; $min++) {
        yield $min;
    }
    return range($min, $max);
}

$numbers = getNumbers(PHP_INT_MIN, PHP_INT_MAX);
foreach ($numbers as $number) {
    echo $number, '';
}
echo PHP_EOL;