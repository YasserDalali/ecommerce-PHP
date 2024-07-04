<?php 
session_start();

/* to skip login: */
$_SESSION['util'] = 1;


if (empty($_SESSION['util']))
{
      header("location: login.php");
}

elseif ($_SESSION['util'] = 1) {
      require('admin.php');
}

else {require("client.php");}
include "links.html";
include "include/navbar.php";