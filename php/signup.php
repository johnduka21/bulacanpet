<?php
include_once 'C:\xampp\htdocs\Bulacan Pet Fish Supply\php\dbh.php';

if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputSignUp($fname, $lname, $email, $username, $pwd, $pwdRepeat)!==false){
        header("location: ../ecom-sign-up.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username)!==false){
        header("location: ../ecom-sign-up.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email)!==false){
        header("location: ../ecom-sign-up.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat)!==false){
        header("location: ../ecom-sign-up.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($link, $username, $email)!==false){
        header("location: ../ecom-sign-up.php?error=usernametaken");
        exit();
    }

    createUser($link, $fname, $lname, $email, $username, $pwd);
} 

else {
    header("location: ../ecom-sign-up.php");
    exit();
}

?>