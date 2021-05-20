<?php

$start = $arvg[1] ?? 0;
$end = $arvg[2] ?? 0;
$range = range($start, $end);

echo implode(',',$range), PHP_EOL;

var_dump($range);

