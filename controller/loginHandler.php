<?php
require "model/user.model.php";

function showLoginPage()
{
    $title = "Login";
    include "views/login.view.php";
    // Include the layout template
    include "views/layout.view.php";
}

function handleLogin()
{
    if (isset($_POST['btn-submit'])) {
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        try {
            $user = loginUser($email, $password);
            if ($user) {

                // Redirect to dashboard or another page upon successful login
                header("Location: index.php?action=dashboard");
                exit();
            } else {
                header("Location: index.php?action=login&error=1");
                showLoginPage(); // Display login form with error message
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        showLoginPage(); // Display login form initially
    }
}

