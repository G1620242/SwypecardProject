<?php
    include('config.php');
    session_start();
// Checks if the user is logged in by selecting the customerID and comparing it with the user check
    $user_check = $_SESSION["login_user"];
    $sql = "select CustomerID from user where CustomerID = '$user_check';";
    $ses_sql = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
// If the loggin user session is not set the page will be redirected to the login page
    if(!isset($_SESSION["login_user"])){
    header("location: log_in.php");
    }
?>
