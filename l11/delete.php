<?php


$file = __DIR__ . '/storage/' . $_GET['id'];
if (!file_exists($file)) {
    header('Location: error.php?message=Comment is not exist');
    exit;
}

unlink($file);

header('Location: forms.php');
