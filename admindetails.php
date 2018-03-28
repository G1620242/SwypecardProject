<?php
include('adminsession.php');
// Selects all the inforamtion that is inputted fromk the admin table and eqauls it to the session Login admin
$sql = "SELECT AdminID, Username, Password FROM admin WHERE AdminID = '$_SESSION[login_admin]' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
