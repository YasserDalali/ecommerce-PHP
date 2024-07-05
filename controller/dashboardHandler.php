<?php
require "model/user.model.php";

function showDashboard()
{

    // Check if user is authenticated (e.g., session or cookie)
    // Example:
    // if (!isset($_SESSION['user'])) {
    //     header("Location: /login");
    //     exit();
    // }

    $title = "Dashboard";
    include "views/dashboard.view.php";
    // Include the layout template
    include "views/layout.view.php";
}


