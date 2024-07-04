<?php

// Bootstrap the application
require_once __DIR__ . '/../app/bootstrap.php';

// Include header
include 'includes/header.php';

// Route the request based on the 'route' parameter in $_GET
$route = $_GET['route'] ?? '/';

switch ($route) {
    case '/':
        // Instantiate HomeController for the root route
        $controller = new App\Controllers\HomeController();
        echo $controller->index(); // Call index method and echo its output
        break;
    case 'project-file-structure':
        // Instantiate ProjectFolderStructureController for the specific route
        $controller = new App\Controllers\ProjectFolderStructureController();
        echo $controller->index(); // Call index method and echo its output
        break;
    case 'model-example':
        // Instantiate ModelExampleController for the specific route
        $controller = new App\Controllers\ModelExampleController();
        echo $controller->index(); // Call index method and echo its output
        break;
    case 'impressum':
    case 'privacy':
        // For static content routes, instantiate StaticContentController and pass $route
        $controller = new App\Controllers\StaticContentController();
        echo $controller->index($route); // Call index method and echo its output
        break;
    default:
        // Handle 404 Not Found error if route does not match any case
        http_response_code(404);
        echo '404 Not Found';
        break;
}

// Include footer
include 'includes/footer.php';
