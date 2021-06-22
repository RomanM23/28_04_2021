<?php

require_once __DIR__ . '/helpers/response.php';

session_start();

$isGuest = empty($_SESSION['user']);
if ($isGuest) {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (login($login, $password)) {
        redirect('index.php');
    } else {
        require __DIR__ . '/auth.php';
        exit;
    }
}

function login(string $login, string $password): bool
{
    if (empty($login) || empty($password)) {
        return false;
    }

//    хешировали таким алгоритмом
    //var_dump(password_hash('1231234', PASSWORD_ARGON2ID));exit;
    $users = [
        [
            'login' => 'test@test.com',
            'password' => '$argon2id$v=19$m=65536,t=4,p=1$QTFsOVN2ZXFhajNuYVV2bw$WMYhfyg2CgPNRFgPzLF7LOplGcWQQaWOPgZ4IEIWyd8',
        ],
        [
            'login' => 'test2@test.com',
            'password' => '$argon2id$v=19$m=65536,t=4,p=1$bDV4VUppLzFJOWIwTU51ZA$+Znq1CR8ifuDU4H6KSjycnbUIB8LO4B8T2iiXVdv4ic',
        ],
    ];

    $filtered = array_filter(
        $users,
        fn(array $user) => ($login === $user['login'])
    );

    if (!$filtered || count($filtered) > 1) {
        return false;
    }

    $user = current($filtered);
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        return true;
    }

    return false;
}
