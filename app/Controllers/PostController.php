<?php

namespace App\Controllers;

class PostController extends Controller
{
    public  function  index()
    {
        $this->view('home');
    }

    public function discussion()
    {
        $this->view('discussion');
    }

    public function  team()
    {
        $this->view('team');
    }

    public function contact()
    {
        $this->view('contact');
    }
}