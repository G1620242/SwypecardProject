<?php
include('session.php');
$sql = "SELECT FirstName, LastName, Username, Password, Address, DOB, Email, PhoneNumber, CustomerID FROM user WHERE customerID = '$_SESSION[login_user]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
mysqli_close($conn);
?>