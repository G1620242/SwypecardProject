<?php
   $servername = "localhost:3306";
    $username = "benjamingittus";
    $password = "password123";
    $dbname = "SwypeCardDatabase";
//    $username = "root";
//    $password = "";
//    $dbname = "test";
   $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());

    }
?>
