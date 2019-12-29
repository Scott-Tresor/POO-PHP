<?php

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views/');

require ('../app/Route/Router.php');

$router = new app\Route\Router($_SERVER['REQUEST_URI']);
$router->get('/connexion/', 'controller@home');
$router->match();



