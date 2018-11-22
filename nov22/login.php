<?php

declare(strict_types = 1);

session_start();

$user = [
    'username' => 'vytautas',
    'password' => 'pass',
];
$posts = $_POST;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $_SESSION['message'] = 'Nesutapo';

    if ($posts['username'] == $user['username'] && $posts['password'] == $user['password']) {
        $_SESSION['message'] = 'Sutapo';
        setcookie('loggedin', '1', time() + 86400);
    }

    header('Location: /nov22');

}