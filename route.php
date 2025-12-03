<?php

include_once __DIR__ . '/controllers/HomeController.php'; // Include the controller
include_once __DIR__ . '/controllers/AuthController.php';
$uri = $_SERVER['REQUEST_URI'];

$basePath = dirname($_SERVER['SCRIPT_NAME']);


// Remove base path from URI to get clean route
$uri = str_replace($basePath, '', $uri);
$homeController = new HomeController();
$controller = new AuthController();

switch ($uri) {
    case '/':
    case '/home':
        $homeController->home();
        break;

    case '/about':
     
         $homeController->about();
         break;

    case '/courses':
        $homeController->courses();
        break;

    case '/syllabus': 

        $homeController->syllabus();
        break;

    case '/careers':
        $homeController->careers();
        break;

    case '/register':
        $controller->register();
        break;

    case '/registerSubmit':
        $controller->registerSubmit();
        break;

    case '/login':
        $controller->login();
        break;

    case '/loginSubmit':
        $controller->loginSubmit();
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}