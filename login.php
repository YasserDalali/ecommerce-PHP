<?php
require "links.html";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require "include/navbar.php" ?>
<main class="container">
    <form method="post">
        <?php 
        if(isset($_POST['btn-submit'])) {
            $mail = htmlspecialchars($_POST['email']);
            $pwd = htmlspecialchars($_POST['pwd']);
            $name = htmlspecialchars($_POST['userName']);

            if (!empty($mail) && !empty($pwd) && !empty($name)) {
                require ('backend/database.php');
                $date = date('Y-m-d');
                 $stmt = $pdo->prepare("INSERT INTO util (id, login, pwd, date_creation) VALUES (null, :login, :pwd, :date)") ;
                $stmt->execute(['login' => $mail, 'pwd' => $pwd, 'date' => $date]);

                header("location: main.php");
                
            }
            else {
                echo "<div class='alert alert-danger'>Please fill in all informations</div>";
            }
        };
     ?>

        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">

                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" name="userName" placeholder="Joe Doe">
            </div>

            <button type="submit" name="btn-submit" class="btn btn-primary w-100 mt-4">Submit</button>
        </form>
    </form>
    </main>
</body>

</html>