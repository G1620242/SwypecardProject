<?php
    include("adminsession.php");

    if (!isset($_GET['bookid'])) {
        header('Location: adminbookingview.php');
    } else {
        $bookid = $_GET['bookid'];
        $sql = "DELETE FROM booking WHERE BookingID = $bookid";
        mysqli_query($conn, $sql);
        header('Location: adminbookingview.php');
    }
?>
