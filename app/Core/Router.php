<?php


namespace app\Core;



class Router
{
    protected array $routes = [];

    public function resolve()
    {
    echo $_SERVER['REQUEST_URI'];
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;

    }
}
