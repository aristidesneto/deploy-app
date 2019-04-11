<?php

use Aristides\Models\User;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$user = new User;
$insert = $user->insert([
    'name' => $name,
    'email' => $email,
    'password' => $password,
]);

if ($insert) {
    header('Location: /');
}
