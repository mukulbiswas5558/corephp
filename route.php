<?php

include_once __DIR__ . '/controllers/AuthController.php'; // Include the controller

$uri = $_SERVER['REQUEST_URI'];

$basePath = dirname($_SERVER['SCRIPT_NAME']);


// Remove base path from URI to get clean route
$uri = str_replace($basePath, '', $uri);
$controller = new AuthController();

switch ($uri) {
    case '/':
    case '/login':
        $controller->login();
        break;

    case '/login-submit':
     
         $controller->loginSubmit();
         break;

    case '/register':
        $controller->register();
        break;

    case '/register-submit': 

        $controller->registerSubmit();
        break;

    case '/logout':
        $controller->logout();
        break;

    case '/dashboard':
        $controller->dashboard();
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}