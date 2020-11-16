<?php
session_start();
include_once "../includes/dbh.php";

if(isset($_POST['logout'])){
    $username = $_SESSION['username'];
    $sql = "UPDATE users SET user_status='offline' WHERE user_display_name='$username'";
    if(mysqli_query($conn, $sql)){

    session_destroy();
    session_unset();

    header('Location: ../index.php');
}
}