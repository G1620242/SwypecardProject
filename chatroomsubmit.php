<?php
include("config.php");
include("functions.php");
include("session.php");

$message = mysqli_real_escape_string($conn,$_POST["message"]);
$custid = $_SESSION['login_user'];


$sql = "INSERT INTO message (message, CustomerID)
VALUES ('$message', '$custid')";
if (mysqli_query($conn, $sql)) {
    // header("Location: chatroom.php");
    $info = "Message Added Successfully";
} else {
    $info ="Unable to Add Message";
}

?>
