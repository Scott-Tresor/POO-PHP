<?php

namespace app\Route;

class Router
{
    private $routes = [];
    private $url = [];

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function get($path, $action)
    {
        $this->routes['GET'][$path] = $action;
    }

    public function post($path, $action)
    {

    }

    public function  match()
    {
        foreach ($this->routes as $key => $routes){
            foreach ($routes as $path => $action){
                if ($this->url === $path){
                    $element = explode('@', $action);
                    $this->callController($element);
                }
            }
            header('HTTP/1.0 404 Not found');
        }
    }

    private  function callController($element)
    {
        $className = 'App\Controllers\\' . $element[0];
        $method = $element[1];
        $controller = new $className();
    }
}