<?php


namespace app\Route;


class Router
{
    public  function render(){
        ob_start();
        if ($_SERVER['REQUEST_URI'] === '/connexion/') {
            require  VIEWS .'home' . '.php';
        } elseif ($_SERVER['REQUEST_URI'] === '/connexion/contact') {
            require VIEWS . 'contact' . '.php';
        } elseif ($_SERVER['REQUEST_URI'] === '/connexion/discussion') {
            require  VIEWS . 'discussion' . '.php';
        } elseif ($_SERVER['REQUEST_URI'] === '/connexion/equipe') {
            require  VIEWS . 'team' . '.php';
        } else {
            header('HTTP/1.0 404 Not found');
        }
        $content = ob_get_clean();
        require (VIEWS . 'layouts/layout'. '.php');
    }
}