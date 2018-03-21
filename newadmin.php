<?php
include("config.php");
session_start();
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $adminusername = mysqli_real_escape_string($conn,$_POST["adminusername"]);
    $adminpassword = mysqli_real_escape_string($conn,$_POST["adminpassword"]);
  
   

    $sql = "INSERT INTO admin (Username, Password)
    VALUES ('$adminusername', '$adminpassword')";
    if (mysqli_query($conn, $sql)) {
        $info = "Admin Added";
    } else {
        $info ="Unable to Add";
    }
}

?>