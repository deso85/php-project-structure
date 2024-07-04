<?php
namespace App\Controllers;

/**
 * HomeController class
 *
 * This controller handles the logic for rendering the home page.
 */
class HomeController
{
    /**
     * index method
     *
     * This method is responsible for rendering the home view.
     */
    public function index()
    {
        // Render the home view
        require_once __DIR__ . '/../views/home.php';
    }
}
