<?php
    include('config.php');
    session_start();
// Checks if the user is logged in by selecting the customerID and comparing it with the user check
    $user_check = $_SESSION["login_admin"];
    $sql = "SELECT AdminID FROM admin WHERE AdminID = '$user_check';";
    $ses_sql = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
// If the login user session is not set the page will be redirected to the login page
    if(!isset($_SESSION["login_admin"])){
    header("location: adminloginpage.php");
    }
?>
