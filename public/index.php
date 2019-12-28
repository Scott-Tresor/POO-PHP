<?php

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views/');

require ('../app/Route/Router.php');
use app\Route\Router;

$router = new Router();
$router->render();


