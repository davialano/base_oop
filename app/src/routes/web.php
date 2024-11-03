<?php

use App\Core\Router;

$router = new Router();

$router->add('/', 'HomeController', 'index');