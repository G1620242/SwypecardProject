<?php
include('session.php');
$sql = "SELECT AdminID, Username, Password FROM user WHERE AdminID = '$_SESSION[login_user]' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
mysqli_close($conn);
?>