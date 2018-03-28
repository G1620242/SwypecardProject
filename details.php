<?php
include('session.php');
// Selects all the inforamtion that is inputted fromk the user table and eqauls it to the session Login admin
$sql = "SELECT FirstName, LastName, Username, Password, Address, DOB, Email, PhoneNumber, CustomerID FROM user WHERE CustomerID = '$_SESSION[login_user]' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
mysqli_close($conn);
?>
