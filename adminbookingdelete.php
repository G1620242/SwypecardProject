<?php
    include("adminsession.php");
//Checks of bookingID has any data attached to it if it doesnt it gets the bookingID and deletes it from the booking table
    if (!isset($_GET['bookid'])) {
        header('Location: adminbookingview.php');
    } else {
        $bookid = $_GET['bookid'];
        $sql = "DELETE FROM booking WHERE BookingID = $bookid";
        mysqli_query($conn, $sql);
        header('Location: adminbookingview.php');
    }
?>
