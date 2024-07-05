<?php
require "model/user.model.php";

function showDashboard()
{


if (!isset($_SESSION['id'])) {
    header("Location: index.php?action=login");
    exit();
}
else {
    $title = "Dashboard";
    $id = $_SESSION['id'];
    include "views/dashboard.view.php";
    // Include the layout template
    include "views/layout.view.php";
}
}

