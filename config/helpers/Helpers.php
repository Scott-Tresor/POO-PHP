<?php


namespace App\Config\helpers;


class Helpers
{
    public function nav( $nav,  $titre,  $class, $className)
    {
        $class = 'nav-item';
        if ($_SERVER['SCRIPT_NAME'] === $nav)
        {
            $class = $class . 'active';
        }
        return <<<HTML
        <li class="$class">
             <a class="$className" href="$nav">$titre</a>
        </li>
HTML;

    }
}