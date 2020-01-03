<?php
require '../vendor/autoload.php';

use App\Config\helpers\Helpers as HelpersAlias;
use app\Router\Router;
require ('../app/Route/Router.php');
require ('../config/helpers/Helpers.php');
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views/');

$router = new Router($_SERVER['REQUEST_URI']);
$helper = new HelpersAlias();

$router->get('/connexion/', 'PostController@index');
$router->get('/connexion/discussion','PostController@discussion');
$router->get('/connexion/equipe','PostController@team');
$router->get('/connexion/contact','PostController@contact');
$router->match();



