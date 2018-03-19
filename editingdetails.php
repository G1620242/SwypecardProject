<?php
include("session.php");
$info ="";
$login_user = $_SESSION["login_user"];
function displayUser($conn, $login_user) {
    $sql = "SELECT FirstName, LastName, Username, Password, Address, DOB, Email, PhoneNumber FROM user
    WHERE CustomerID = '$login_user' ";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    } else {

      echo " Not Working Correctly";
    }

    return $row;
}
function updateUser($conn, $login_user) {
    $myfirstname = mysqli_real_escape_string($conn,$_POST["first_name"]);
    $mylastname = mysqli_real_escape_string($conn,$_POST["last_name"]);
    $myusername = mysqli_real_escape_string($conn,$_POST["username"]);
    $myaddress = mysqli_real_escape_string($conn,$_POST["address"]);
    $myDOB = mysqli_real_escape_string($conn,$_POST["age"]);
    $myphonenumber = mysqli_real_escape_string($conn,$_POST["phone_number"]);

$sql = "UPDATE user SET FirstName = '$myfirstname', LastName = '$mylastname', Username = '$myusername', Address = '$myaddress', DOB = '$myDOB', PhoneNumber = '$myphonenumber' WHERE CustomerID = '$login_user' ";
if (mysqli_query($conn, $sql)) {
    $info = "Updated ";
    header("Location: profile.php");
} else {
    $info = "Error updating: ". mysqli_error($conn);
}
return $info;
}
function deleteUser($conn, $login_user) {
$sql = "DELETE FROM user WHERE CustomerID = '$_SESSION[login_user]' ";
if (mysqli_query($conn, $sql)) {
    $info = "Deleted ";
header("Location: log_out.php");
} else {
    $info = "Error deleting: " . mysqli_error($conn);
}
return $info;
}
if(isset($_POST["update"])){
    $info = updateUser($conn, $_SESSION["login_user"]);
    $row = displayUser($conn, $_SESSION["login_user"]);
}
else if (isset($_POST["delete"])){
    $info = deleteUser($conn, $_SESSION["login_user"]);
}
else
{
    $row = displayUser($conn, $_SESSION["login_user"]);
}
mysqli_close($conn);

?>
