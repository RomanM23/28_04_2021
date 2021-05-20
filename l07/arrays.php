<?php

$new = [
    1, 2, 4
];

$new[] = 5;
$new[] = 6;

array_push($new, 7);

$new[2] = 11;

unset($new[3]);

$new[3] = 22;

$sold = array(1, 2, 3, 4, 5, 6, 7);

var_dump($new ,$sold );

$a1 = [
    'name' => 'Roman',
    'lastName' => 'Mazuryk',
    'age' => 27,
    'skills' => [
        [
            'language' => 'php',
            'exp' => '10+',
        ],
        [
            'language' => 'js',
            'exp' => '10+',
        ],
        [
            'language' => 'c#',
            'exp' => '3+',
        ],
        [
            'language' => 'java',
            'exp' => '1+',
        ],
    ],
];

$a1['company'] = 'MGID';
$a1['skills'][]= [
    'language' => 'python',
    'exp' => 'o',
];
$a1['skills'][1]['language'] = 'javaScript';

unset($a1['skills'][3]);

var_dump($a1['lastName'], $new[1], array_slice($sold, 2, 3));
var_dump($a1);
var_dump($a1['skills'][1]['language']);
//$js = $a1['skills'][1];

$big = [
    'one' => [
        'two' => [
            'three' => [
                'four' => [
                    'five' => [
                        'six'
                    ],
                ],
            ],
        ],
    ],
];
var_dump($big);

echo '<pre>';
print_r($big);
echo '</pre>';


//$a2 = ['Romsn', 'Mazuryk', 27];
//$name = $a[0];
//$lastName = $a2[1];
//$age = $a2[2];
//list($name, $lastName, $age) = $a2;
[$name, $lastName, $age] = $a2;

var_dump($name, $lastName, $age);

$a3 = compact();













