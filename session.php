<?php
    include('config.php');
    session_start();

    $user_check = $_SESSION["login_user"];
    $sql = "select CustomerID from user where CustomerID = '$user_check';";
    $ses_sql = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    if(!isset($_SESSION["login_user"] || $_SESSION["login_admin"])){
    header("location: log_in.php");
    }
?>
