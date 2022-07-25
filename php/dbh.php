<?php
/*
$serverName = "sql312.epizy.com";
$dbUsername = "epiz_32164472";
$dbPassword = "";
$dbName = "epiz_32164472_bulacanpetfish";

$link = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$link){
    die("Connection Failed: ".mysqli_connect_error());
}


define('DB_SERVER', 'sql312.epizy.com');
define('DB_USERNAME', 'epiz_32164472');
define('DB_PASSWORD', 'CcXndhAtEvip');
define('DB_NAME', 'epiz_32164472_bulacanpetfish');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$link){
    die("Connection Failed: ".mysqli_connect_error());
}
*/


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ecommercesignup');
define('DB_PORT', 3307);

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if(!$link){
    die("Connection Failed: ".mysqli_connect_error());
}


?>