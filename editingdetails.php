<?php 
include("session.php");
$info ="";
function displayUser($conn, $login_user) {
    $sql = "SELECT FirstName, LastName, Username, Address, DOB, PhoneNumber, FROM user
    WHERE CustomerID = '$login_user' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    return $row;
}
function updateUser($conn, $login_user) {
    $myfirstname = mysqli_real_escape_string($conn,$_POST["first_name"]);
    $mylastname = mysqli_real_escape_string($conn,$_POST["last_name"]);
    $myusername = mysqli_real_escape_string($conn,$_POST["username"]);
    $myaddress = mysqli_real_escape_string($conn,$_POST["address"]);
    $myDOB = mysqli_real_escape_string($conn,$_POST["age"]);
    $myphonenumber = mysqli_real_escape_string($conn,$_POST["phone_number"]);

$sql = "UPDATE user SET FirstName = '$myfirstname', LastName = '$mylastname', Username = '$myusername', Address = '$myaddress', DOB = '$myDOB' PhoneNumber = '$myphonenumber' WHERE CustomerID = '$_SESSION[login_user]' ";
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
if(isset($_POST["edit"])){
    $info = updateUser($conn, $_SESSION["login_user"]);
    $row = displayUser($conn, $_SESSION["login_user"]);
}
else if (isset($_POST["removeaccount"])){
    $info = deleteUser($conn, $_SESSION["login_user"]);
}
else
{
    $row = displayUser($conn, $_SESSION["login_user"]);
}
mysqli_close($conn);

?>