<?php


$MENU = [
    'pivko' => [
        [
            'title' => 'obolony' ,
            'link' => 'https://www.youtube.com/watch?v=b7Gas0nBEhQ',
        ],
        [
            'title' => 'lvivske',
            'link' => 'https://www.youtube.com/watch?v=b7Gas0nBEhQ' ,
        ],
        [
            'title' => 'tuborg',
            'link' => 'https://www.youtube.com/watch?v=b7Gas0nBEhQ' ,
        ]
    ],
    'FRUITS' => [
        [
            'title' => 'apple' ,
            'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE' ,
        ],
        [
            'title' => 'pears',
            'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE' ,
        ],
        [
            'title' => 'banana',
            'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE' ,
        ]
    ],
    'VEGETABLES' => [
        [
            'title' => 'potato',
            'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE' ,
        ],
        [
            'title' => 'carrots',
            'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE' ,
        ],
        [
            'title' => 'onion',
            'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE' ,
        ],
    ],
    'BERRIES' => [
        [
            'title' => 'cherry',
            'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE' ,
        ],
        [
            'title' => 'plum',
            'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE' ,
        ],
        [
            'title' => 'merry',
            'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE' ,
        ],
    ],
];
//var_dump($MENU);
//var_dump($MENU['FRUITS'][1]);


foreach ($MENU as $kay => $value) {
    var_dump($kay, $value);
}





