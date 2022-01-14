<?php
/* Простейший роутер позволяет задать контроллер для страницы 404, и для других маршрутов*/


class Router
{
    private static $routes = [];
    private static $err404;

    public static function err404($path) {
        self::$err404 = $path;
    }

    public static function addRoute($path, $controller) {
        self::$routes[] = [$path => $controller];
    }

    public static function removeRoute($path) {
        unset(self::$routes[$path]);
    }

    public static function start ()
    {
        $route = $_SERVER['REQUEST_URI'];

        if(array_key_exists($route, self::$routes)) {
            include self::$routes[$route]; exit;
        } else {
            include self::$err404; exit;
        }
    }
}