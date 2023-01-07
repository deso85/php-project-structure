<?php
namespace App\Controllers;

class ProjectFolderStructureController
{
    public function index()
    {
        // render the project folder structure view
        require_once __DIR__ . '/../views/project-folder-structure.php';
    }
}
