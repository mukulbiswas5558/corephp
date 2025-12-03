<?php 
session_start();
date_default_timezone_set('Asia/Kolkata');

// Define constants
define('BASE_PATH', __DIR__);
define('BASE_URL', 'http://localhost/corephp');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'apidb');
include_once BASE_PATH . '/helper.php';

// Include the route file
include_once BASE_PATH . '/route.php';
