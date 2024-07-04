<?php
require "../model/user.model.php";

function dashboardPage()
{
    if (isset($_POST['btn-submit'])) {
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        try {
            $user = loginUser($email, $password);
            if ($user) {
                $title = "Welcome, " . $user['email'];
                include_once '../views/dashboard.view.php'; // $content is now included thanks to ob_start();

                // now both $title and $content are defined, we can push them into layout finally
                include "../views/layout.php";
                exit(); // Stop further execution after rendering the view



            } else {
                $title = "Login Failed";
                $content = "Invalid email or password. Please try again.";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    // If no form submission or authentication failure, include the login form view
    $title = "Login";
    ob_start();
    include "../views/login.view.php";
    $content = ob_get_clean();

    // Include the layout template
    include "../views/layout.php";
}

function loginPage()
{
    $title = "Login";
    ob_start();
    include "../views/login.view.php";
    $content = ob_get_clean();

    // Include the layout template
    include "../views/layout.php";
}

