<?php
namespace App\Controllers;

/**
 * ProjectFolderStructureController class
 *
 * This controller handles the logic for displaying the project folder structure view.
 */
class ProjectFolderStructureController
{
    /**
     * index method
     *
     * This method renders the project folder structure view.
     */
    public function index()
    {
        // Render the project folder structure view
        require_once __DIR__ . '/../views/project-folder-structure.php';
    }
}
