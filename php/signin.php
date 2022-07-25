<?php

if (isset($_POST["submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputSignin($username, $pwd)){
        header("location: ../ecom-sign-in.php?error=emptyinput");
        exit();
    }

    loginUser($link, $username, $pwd);
}

else {
    header("location: ../ecom-sign-in.php");
    exit();
}