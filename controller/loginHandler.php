<?php
require "model/user.model.php";

function showLoginPage()
{
    $title = "Login";
    include "views/login.view.php";
    // Include the layout template
    include "views/layout.view.php";
}
function showRegisterPage()
{
    $title = "Register";
    include "views/register.view.php";
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
                $_SESSION['id'] = getUserByUsername($email)['id'];
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
function handleRegister()
{
    if (isset($_POST['btn-submit'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['pwd']);
        $password2 = htmlspecialchars($_POST['pwd2']);

        try {
            $user = getUserByUsername($email);
            if ($password == $password2 && !empty($email)&& !empty($password)&& !empty($password2)){
                if (!$user) {
                    try {
                        createUser($email = $_POST['email'], $password);
                        $_SESSION['id'] = getUserByUsername($email)['id'];


                        header("Location: index.php?action=dashboard&newacc=true");
                        exit();

                    } catch (Exception $e) {
                        $emsg = urlencode($e->getMessage());
                        header("Location: index.php?action=register&error=0&emsg=$emsg");
                    }


                } else {
                    header("Location: index.php?action=register&error=2");
                    showLoginPage(); // Display login form with error message
                }}
                else {
                    header("Location: index.php?action=register&error=1");
                }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        showLoginPage(); // Display login form initially
    }
}

function logOut()
{
    $_SESSION = [];
    $_COOKIE = [];
    header("Location: index.php?action=login");
    exit();
}
