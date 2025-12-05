<?php

include_once __DIR__ . '/controllers/HomeController.php';
include_once __DIR__ . '/controllers/AuthController.php';
include_once __DIR__ . '/controllers/AdminController.php';

$uri = $_SERVER['REQUEST_URI'];

// Remove query parameters (?i=1, ?z=1, etc.)
$uri = parse_url($uri, PHP_URL_PATH);

// Normalize route (remove leading slash)
$uri = trim($uri, '/');

// Handle empty route → use home
if ($uri === '') {
    $uri = 'home';
}

$homeController = new HomeController();
$controller = new AuthController();


switch ($uri) {

    case 'home':
        $homeController->home();
        break;

    case 'contact':
        $homeController->contact();
        break;

    case 'register':
        $controller->register();
        break;

    case 'registerSubmit':
        $controller->registerSubmit();
        break;

    case 'login':
        $controller->login();
        break;

    case 'loginSubmit':
        $controller->loginSubmit();
        break;

    case 'admin':
        $adminController = new AdminController();
        $adminController->registerUserDetails();
        break;

    case 'logout':
        $adminController = new AdminController();
        $adminController->logout();
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}