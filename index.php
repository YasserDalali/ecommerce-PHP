<?php
// index.php

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

$route = strtolower(trim($request_uri[0], '/'));

// Define routes and map them to controllers
switch ($route) {
    case '':
    case 'login':
        require_once 'controllers/user.controller.php';
        loginPage();
        break;
    case 'dashboard':
        require_once 'controllers/user.controller.php';
        dashboardPage();
        break;
    // Add more routes as needed
    default:
        http_response_code(404);
        echo '404 Not Found';
        break;
}

