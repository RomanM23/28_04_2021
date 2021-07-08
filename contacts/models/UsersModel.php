<?php

function createUser(array $userData): bool
{
    $connect = getDbConnection();

    $password = password_hash($userData['password'],  PASSWORD_BCRYPT);
    $sql = <<<SQL
        INSERT INTO `users` (`login`, `password`)
        VALUES (?, ?)
    SQL;
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, 'ss', $userData['login'], $password);

    return mysqli_stmt_execute($stmt);
}

function findUserByLogin(string $login): ?array
{
    $connect = getDbConnection();

    $sql = 'SELECT * FROM `users` WHERE `login` = ? LIMIT 1';
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, 's', $login);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    return mysqli_fetch_assoc($result);
}

function getAllUsers(int $page = 1, int $limit = 50): array
{
    $connect = getDbConnection();
    $sql = <<<SQL
        SELECT id, name, login, birthday, created_at
        FROM users
        ORDER BY name, login
        LIMIT ?
        OFFSET ?
    SQL;

    $offset = ($page - 1) * $limit;

    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, 'ii', $limit, $offset);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getAllUsersCount(): int
{
    $connect = getDbConnection();
    $sql = 'SELECT COUNT(1) AS quantity FROM users';
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($result);

    return (int)$data['quantity'];
}

function generateRandomUsers(int $count)
{
    $connect = getDbConnection();
    $sql = 'INSERT IGNORE INTO `users` (`name`, `login`, `password`) VALUES ';
    $rows = [];
    for (; $count > 0; $count--) {
        $name = generateRandomName();
        $login = strtolower(str_replace(' ', '_', $name));
        $password = password_hash($login, PASSWORD_BCRYPT);
        $rows[] = "('{$name}', '{$login}', '$password')";

        if (count($rows) === 50) {
            executeBatchInsertQuery($connect, $sql, $rows);
            $rows = [];
        }
    }

    if ($rows) {
        executeBatchInsertQuery($connect, $sql, $rows);
    }
}