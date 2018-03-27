<?php
include ('session.php');
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $colourchoice = mysqli_real_escape_string($conn,$_POST["colourchoice"]);
    $designchoice = mysqli_real_escape_string($conn,$_POST["designchoice"]);
    $stylechoice = mysqli_real_escape_string($conn,$_POST["stylechoice"]);

    $custid = $_SESSION['login_user'];


    $sql = "INSERT INTO booking (ColourChoice, DesignChoice, StyleChoice, CustomerID)
    VALUES ('$colourchoice', '$designchoice', ' $stylechoice', '$custid')";
    if (mysqli_query($conn, $sql)) {
        $info = "Booked";
    } else {
        $info ="Unable to Book";
    }
}
 ?>
