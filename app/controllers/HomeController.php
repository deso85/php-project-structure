<?php
namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // render the home view
        require_once __DIR__ . '/../views/home.php';
    }
}
