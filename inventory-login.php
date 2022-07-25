<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/960bfa3deb.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/inventory-login.css">
    <link rel="icon" type="image/x-icon" href="images/PlaceholderFavIcon.ico">
</head>

<?php
    require ("php/dbh.php");
    //Inventory Login Code
    if(isset($_POST['login'])){
        $query = "SELECT * FROM `admin_login` WHERE `admin_user`='$_POST[username]' AND `admin_pass`='$_POST[password]'";
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result)==1){
            echo"<script>alert('Login Successfully.');</script>";
            session_start();
            $_SESSION['adminlogin']=$_POST['username'];
            header("location: inventory-dashboard.php");
        }
        else {
            echo"<script>alert('Incorrect Login.');</script>";
        }
    }
?>

<body background="aquariums.png">
    <div class="main-container">
        <div class="login-container">
            <div class="logo-flex">
                <img class ="logo" src="images/PlaceholderFavIcon.ico" alt="">
            </div>
            <!-- Admin Login Header -->
            <h1>Admin Login</h1>

            <form method="POST">
                <!-- Enter Username -->
                <label for="username">Username: </label>
                <input type="text" name="username" required>

                <!-- Enter Password -->
                <label>Password: </label>
                <input type="password" name="password" required>

                <!-- Click Login Button -->
                <button class="login-btn" type="submit" name="login">Login</button>
            </form>

            </div>
        </div>
</body>