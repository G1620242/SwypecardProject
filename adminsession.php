<?php
    include('config.php');
    session_start();

    $user_check = $_SESSION["login_admin"];
    $sql = "SELECT AdminID FROM admin WHERE AdminID = '$user_check';";
    $ses_sql = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    if(!isset($_SESSION["login_admin"])){
    header("location: adminloginpage.php");
    }
?>
