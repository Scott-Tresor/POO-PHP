<?php
require '../vendor/autoload.php';
require ('../app/Route/Router.php');
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views/');

$router = new app\Route\Router($_SERVER['REQUEST_URI']);

$router->get('/connexion/', 'PostController@home');
$router->get('/connexion/discussion','PostController@discussion');
$router->get('/connexion/equipe','PostController@team');
$router->get('/connexion/contact','PostController@contact');
$router->match();



