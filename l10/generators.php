<?php

function printNumbers(int $min, int $max): array
{
    for (; $min <= $max; $min++) {
        yield $min
    }
    return range($min, $max);
}

return range(PHP_INT_MIN, PHP_INT_MAX);
$numbers = printNumbers(1, 10);
foreach ($numbers as $number) {
    echo $number, '';
}
echo PHP_EOL;