<?php
require '../vendor/autoload.php';

use app\Router\Router;
require ('../app/Route/Router.php');
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views/');

$router = new Router($_SERVER['REQUEST_URI']);

$router->get('/connexion/', 'PostController@index');
$router->get('/connexion/discussion','PostController@discussion');
$router->get('/connexion/equipe','PostController@team');
$router->get('/connexion/contact','PostController@contact');
$router->match();



