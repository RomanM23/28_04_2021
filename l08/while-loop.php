<?php

$file = fopen(__DIR__. '/for-loop.php', 'rb');

while ($line = fgets($file)) {
    echo $line, '<br>';
}

fclose($file);
