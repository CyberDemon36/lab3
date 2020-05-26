<?php

$connection = mysqli_connect("localhost","root","", "user");

if(mysqli_connect_errno()){
    die("Data base connection failed: ".mysqli_connect_error() . " (" . mysqli_connect_errno() . ") ");
    exit();
}

mysqli_query($connection, "SET NAMES utf8");

// $query = "SELECT * FROM users WHERE login='$LOGIN' and password='$PASSWORD'";
// $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

?>
