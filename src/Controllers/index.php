<?php

use Aristides\Models\User;

$user = new User;
$users = $user->all();

$layout->add('home');