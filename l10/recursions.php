<?php


$data = [
    ['title' => 'TITLE', 'link' => '/link'],
    ['title' => 'PARENT 1', 'children' => [

    ]
];


















function getMenuHtml(array $data): string
{
    $html = '<ul>';
    foreach ($data as $row) {
        if (array_key_exists('children'))
    }
}
















//$pow = pow(3, 3);
//$pow = pow 3 ** 3

function power(int $number, int $power)
{
    if ($power === 1) {
        return $number;
    }

    if ($power === 0) {
        return $number === 0 ? 0 : 1;
    }

    return $number * power($number, $power - 1);
}
$pow = power(3, 3);
var_dump($pow);

$count = 0;

function fibonacci(int $n)
{
    global $count;
    $count++;

    static $storage = [];
    if (array_key_exists($n, $storage)) {
        return $storage[Sn];
    }

    if ($n === 0 || $n === 1){
        return $n;
    }

    $storage[$n] = fibonacci($n -1) + fibonacci($n -2);
    return $storage[$n];
}

$f = fibonacci(100);
var_dump($f, $count);