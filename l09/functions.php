<?php

require_once __DIR__ . '/functions_2.php';

/*      те саме шо і рекваєр тільки не дає фатал ерор як шо нема файлу functions_2.php
include __DIR__ . '/functions_2.php';   */

hello();

function hello()
{
    echo 'hello my friend!<br>';
    echo __FUNCTION__, '<br>';
    handshake();
}
handshake();
hello();
hello();
hello();

$elements = scandir(__DIR__);
$filtered = array_filter($elements, function ($item) {
    return !in_array($item, ['.', '..']);
});
var_dump($filtered);


$test = function () {
  echo 'TEST', '<br>';
};

$test();
call_user_func($test);
call_user_func('hello');
