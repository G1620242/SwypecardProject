
<?php
include("config.php");
session_start();
ini_set('display_errors', 1);
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
  

   $myusername = mysqli_real_escape_string($conn,$_POST["username"]);
   $mypassword = mysqli_real_escape_string($conn,$_POST["password"]); 

   $sql = "SELECT CustomerID FROM user WHERE Username = '$myusername' and Password = '$mypassword'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $active = $row["CustomerID"];

   $count = mysqli_num_rows($result);

  

   if($count == 1) {
      $_SESSION["login_user"] = $row["CustomerID"];

      header("location: loginindexpage.php");
   } else {
      $info = "Your Login Name or Password is invalid";
   }
    mysqli_close($conn);
}

?>