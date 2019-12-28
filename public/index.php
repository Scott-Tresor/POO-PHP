<?php

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views/');

require ('../app/Route/Router.php');
require ('../config/database.php');
use app\Route\Router;
use config\database;

$router = new Router();
$router->render();

$pdo  = database::getPDO();



