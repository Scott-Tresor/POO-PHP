<?php


namespace app\Route;


class Router
{
    public  function render(){
        if ($_SERVER['REQUEST_URI'] === '/connexion/') {
            $content = require  VIEWS .'home' . '.php';
        } elseif ($_SERVER['REQUEST_URI'] === '/connexion/contact') {
            echo 'contact';
        } elseif ($_SERVER['REQUEST_URI'] === '/connexion/discussion') {
            echo 'discussion';
        } else {
            header('HTTP/1.0 404 Not found');
        }
    }
}