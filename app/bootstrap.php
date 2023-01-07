<?php

// include libraries and frameworks
require_once __DIR__ . '/libs/database/database.php'; // database class; db() returns $pdo
require_once __DIR__ . '/libs/Michelf/Markdown.inc.php'; // PHP Markdown library

// define the page title constant
define('PAGE_TITLE', 'PHP Project Template');

// set up autoloading (optional)
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/';
    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
