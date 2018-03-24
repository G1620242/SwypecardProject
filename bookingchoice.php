<?php 
include("config.php");
session_start();
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $colourchoice = mysqli_real_escape_string($conn,$_POST["colour_choice"]);
    $designchoice = mysqli_real_escape_string($conn,$_POST["design_choice"]);



    $sql = "INSERT INTO user (FirstName, LastName, Username, Password, Address, DOB, Email, PhoneNumber)
    VALUES ('$myfirstname', '$mylastname', '$myusername', '$mypassword', '$myaddress', '$myDOB', '$myemail', '$myphonenumber')";
    if (mysqli_query($conn, $sql)) {
        $info = "User Added";
    } else {
        $info ="Unable to Add";
    }
}
 ?>
