<?php
include('adminsession.php');
$sql = "SELECT AdminID, Username, Password FROM admin WHERE AdminID = '$_SESSION[login_admin]' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
