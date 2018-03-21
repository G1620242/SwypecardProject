<?php
    include('config.php');
    session_start();

    $user_check = $_SESSION["login_user"];
    $sql = "select AdminID from user where AdminID = '$user_check';";
    $ses_sql = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    if(!isset($_SESSION["login_user"])){
    header("location: adminloginpage.php");
    }
?>