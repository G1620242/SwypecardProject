<?php
include ('session.php');
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $prob = mysqli_real_escape_string($conn,$_POST["problem"]);

    $custid = $_SESSION['login_user'];


    $sql = "INSERT INTO problem (problem, CustomerID)
    VALUES ('$prob', '$custid')";
    if (mysqli_query($conn, $sql)) {
        $info = "Submitted";
    } else {
        $info ="Cannot Submit";
    }
}
 ?>
