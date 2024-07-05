<?php
/* var_dump($_GET);
 */

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case "login":
            include 'controller/loginHandler.php';
            showLoginPage();
            break;
        case "dashboard":

            include 'controller/dashboardHandler.php';
            showDashboard();
            break;

        case "loginHandle":

            include 'controller/loginHandler.php';
            handleLogin();
            break;
    }
}

else {
    include 'controller/loginHandler.php';
    showLoginPage();
}
