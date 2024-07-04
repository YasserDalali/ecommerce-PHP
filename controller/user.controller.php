<?php
require "../model/user.model.php";


if (isset($_POST['btn-submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    try {
        $user = loginUser($email, $password);
        if ($user) {
            $title = "Welcome, ".$user['email'];
            include_once '../views/dashboard.view.php'; // $content is now included thanks to ob_start();

            // now both $title and $content are defined, we can push them into layout finally
            include "../views/layout.php";
            exit(); // Stop further execution after rendering the view

            



        }

        else {
            $title = "Login Failed";
            $content = "Invalid email or password. Please try again.";
        }


    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
