<?php

namespace App\Core;

class Router
{
    private $routes = [];

    public function add($route, $controller, $method) {
        $this->routes[$route] = ['controller' => $controller, 'method' => $method]; 
    }

    public function dispatch($uri) {
        $uri = parse_url($uri, PHP_URL_PATH);
        if (isset($this->routes[$uri])) {
            $controllerName = "\\App\\Controllers\\" . $this->routes[$uri]['controller'];
            $method = $this->routes[$uri]['method'];
            $controller = new $controllerName();
            $controller->$method();
        } else {
            echo '404 - Not Found';
        }
    }
}