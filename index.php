<?php 
session_start();
date_default_timezone_set('Asia/Kolkata');

// Define constants
define('BASE_PATH', __DIR__);
define('BASE_URL', 'https://gcettstech.gt.tc');
define('DB_HOST', 'sql100.infinityfree.com');
define('DB_USER', 'if0_40585421');
define('DB_PASS', 'chandanbala1990');
define('DB_NAME', 'if0_40585421_gcetts');
include_once BASE_PATH . '/helper.php';

// Include the route file
include_once BASE_PATH . '/route.php';
