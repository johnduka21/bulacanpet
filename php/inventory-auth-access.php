<?php
    require_once 'php/dbh.php';
    session_start();
    if(!isset($_SESSION['adminlogin'])){
        header("location: inventory-login.php?page=login");
    }
?>