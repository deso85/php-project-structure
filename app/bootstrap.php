<?php

// Include libraries and frameworks
require_once __DIR__ . '/libs/database/database.php'; // Database class; db() returns $pdo instance
require_once __DIR__ . '/libs/Michelf/Markdown.inc.php'; // PHP Markdown library for parsing markdown

// Define the page title constant
define('PAGE_TITLE', 'PHP Project Template');

// Set up autoloading for classes (optional)
spl_autoload_register(function ($class) {
    // Namespace prefix for the application classes
    $prefix = 'App\\';
    // Base directory for the namespace prefix
    $base_dir = __DIR__ . '/';
    // Length of the namespace prefix
    $len = strlen($prefix);
    
    // If the class does not use the namespace prefix, move to the next autoloader
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    
    // Get the relative class name by removing the prefix
    $relative_class = substr($class, $len);
    // Replace the namespace prefix with the base directory and convert namespace
    // separators to directory separators in the relative class name
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
    // If the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});