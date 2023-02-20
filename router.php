<?php

// router.php

require_once('app/controllers/HomeController.php');
require_once('app/controllers/UserController.php');

// Display folder path errors and other errors
ini_set("display_errors", "1");
error_reporting(E_ALL);

// Define routes
$routes = [
    '/' => ['HomeController', 'index'],
    '/users/login' => ['UserController', 'login'],
    '/users/register' => ['UserController', 'register'],
    '/users/doLogin' => ['UserController', 'doLogin'],
    '/users/doLogout' => ['UserController', 'doLogout'],
    '/users/doRegister' => ['UserController', 'doRegister']
];

// Parse current URL
$path = $_SERVER['REQUEST_URI'];
if (strpos($path, '?') !== false) {
    $path = substr($path, 0, strpos($path, '?'));
}

// Check if route exists
if (array_key_exists($path, $routes)) {
    $controllerName = $routes[$path][0];
    $methodName = $routes[$path][1];

    // Call the controller method
     $controller = new $controllerName();
     $controller->$methodName();
} else {
    // Show 404 error page
    echo "404 Page Not Found";
}