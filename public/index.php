<?php

// bootstrap the application
require_once __DIR__ . '/../app/bootstrap.php';

include 'includes/header.php';

// route the request
$route = $_GET['route'] ?? '/';

switch ($route) {
    case '/':
        $controller = new App\Controllers\HomeController();
        echo $controller->index();
        break;
    case 'project-file-structure':
        $controller = new App\Controllers\ProjectFolderStructureController();
        echo $controller->index();
        break;
    case 'model-example':
        $controller = new App\Controllers\ModelExampleController();
        echo $controller->index();
        break;
    case 'impressum':
        $controller = new App\Controllers\StaticContentController();
        echo $controller->index($route);
        break;
    case 'privacy':
        $controller = new App\Controllers\StaticContentController();
        echo $controller->index($route);
        break;
    default:
        http_response_code(404);
        echo '404 Not Found';
        break;
}

include 'includes/footer.php';
