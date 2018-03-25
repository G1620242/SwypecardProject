<?php
include("config.php");
session_start();
ini_set('display_errors', 1);
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {


   $adminusername = mysqli_real_escape_string($conn,$_POST["adminusername"]);
   $adminpassword = mysqli_real_escape_string($conn,$_POST["adminpassword"]);

   $sql = "SELECT AdminID FROM admin WHERE Username = '$adminusername' and Password = '$adminpassword'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $active = $row["AdminID"];

   $count = mysqli_num_rows($result);



   if($count == 1) {
      $_SESSION["login_admin"] = $row["AdminID"];

      header("location: adminmainpage.php");
   } else {
      $info = "Your Admin Login Name or Password is invalid";
   }
    mysqli_close($conn);
}

?>
