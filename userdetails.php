<?php
include('session.php');
// All the details from the user and being selected in this code so it can be included.
$sql = "SELECT FirstName, LastName, Username, Password, Address, DOB, Email, PhoneNumber, CustomerID FROM User WHERE customerID = '$_SESSION[login_user]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
mysqli_close($conn);
?>
