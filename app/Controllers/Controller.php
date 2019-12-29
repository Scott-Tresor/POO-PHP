<?php

namespace App\Controllers;

abstract class Controller
{
    public function view($view, Array $params = null)
    {
        ob_start();
        extract($params);
        require VIEWS . '/' . $view . '.php';
        $content = ob_get_clean();
        require VIEWS . '/' . '/layouts/layout' . '.php';
    }
}