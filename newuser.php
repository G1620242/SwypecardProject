<?php
include("config.php");
session_start();
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $myfirstname = mysqli_real_escape_string($conn,$_POST["first_name"]);
    $mylastname = mysqli_real_escape_string($conn,$_POST["last_name"]);
    $myusername = mysqli_real_escape_string($conn,$_POST["username"]);
    $mypassword = mysqli_real_escape_string($conn,$_POST["password"]);
    $myaddress = mysqli_real_escape_string($conn,$_POST["address"]);
    $myDOB = mysqli_real_escape_string($conn,$_POST["age"]);
    $myemail = mysqli_real_escape_string($conn,$_POST["email"]);
    $myphonenumber = mysqli_real_escape_string($conn,$_POST["phone_number"]);
   

    $sql = "INSERT INTO user (FirstName, LastName, Username, Password, Address, DOB, Email, PhoneNumber)
    VALUES ('$myfirstname', '$mylastname', '$myusername', '$mypassword', '$myaddress', '$myDOB', '$myemail', '$myphonenumber')";
    if (mysqli_query($conn, $sql)) {
        $info = "User Added";
    } else {
        $info ="Unable to Add";
    }
}

?>