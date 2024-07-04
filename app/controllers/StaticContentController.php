<?php
namespace App\Controllers;

/**
 * StaticContentController class
 *
 * This controller handles the logic for rendering static content views based on the provided route.
 */
class StaticContentController
{
    /**
     * index method
     *
     * This method renders the specified view based on the provided route.
     *
     * @param string $route The route or name of the view to render.
     */
    public function index($route)
    {
        // Render the specified view
        require_once __DIR__ . '/../views/' . $route . '.php';
    }
}
