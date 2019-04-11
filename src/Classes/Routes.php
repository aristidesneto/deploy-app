<?php

namespace Aristides\Classes;

class Routes
{
    public static function load($routes, $uri)
    {
        if (!array_key_exists($uri, $routes)) {
            throw new \Exception("Rota não existe: {$uri}");
        }

        return "../src/{$routes[$uri]}.php";
    }
}