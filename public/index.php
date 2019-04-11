<?php

require __DIR__ . '../../bootstrap.php';

use Aristides\Classes\Uri;
use Aristides\Classes\Layout;
use Aristides\Classes\Routes;


// Rotas do sistema
$routes = [
    '/' => 'Controllers/index',
    '/user_create' => 'Controllers/user_create',
    '/user_store' => 'Controllers/user_store',
];


$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');