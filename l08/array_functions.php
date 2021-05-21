<?php

$a1 = [
    'name' => 'Roman',
    'age' => 27,
    'skills' => [
        'php',
        'end'
    ],
];

$serialized = serialize($a1);
var_dump($serialized);

$s1 = 'a:3:{s:4:"name";s:5:"Roman";s:3:"age";i:27;s:6:"skills";a:2:{i:0;s:3:"php";i:1;s:3:"end";}}';
$deserialized = unserialize($s1);
var_dump($deserialized);

$count = count($a1);
$countRecursive = count($a1, COUNT_RECURSIVE);
var_dump($count, $countRecursive);

//var_dump(array_shift($a1), $a1);
//var_dump(array_shift($a1), $a1);
//var_dump(array_shift($a1), $a1);

var_dump(array_key_exists('age', $a1), array_key_exists('test', $a1) );

var_dump(in_array('Roman', $a1), in_array(27, $a1), in_array('33', $a1));

$a2 = [ 1,2,3,
];

$unique = array_unique($a2);
var_dump($unique);










