<?php
/* var_dump($_GET);
 */
session_start();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case "login":
            include 'controller/loginHandler.php';
            showLoginPage();
            break;

        case "register":
            include 'controller/loginHandler.php';
            showRegisterPage();
            break;

        case "dashboard":
            include 'controller/dashboardHandler.php';
            showDashboard();
            break;

        case "loginHandle":

            include 'controller/loginHandler.php';
            handleLogin();
            break;
            
        case "registerHandle":

            include 'controller/loginHandler.php';
            handleRegister();
            break;

        case "logout":
                include 'controller/loginHandler.php';
                logOut();
                break;
    }
}


else {
    header("location: index.php?action=dashboard");
}


