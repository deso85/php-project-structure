<?php
namespace App\Controllers;

class StaticContentController
{
    public function index($route)
    {
        // render the home view
        require_once __DIR__ . '/../views/' . $route . '.php';
    }
}
