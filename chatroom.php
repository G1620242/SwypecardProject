<?php
include("config.php"); 

$dbname = "SwypeCardDatabase";
 
mysql_select_db($dbname);
 
$message = $_POST['message'];
 
if($message != "")
{
 $sql = "INSERT INTO chat VALUES("",'$message')";
 mysql_query($sql);
}
 
$sql = "SELECT Text FROM chat ORDER BY ID DESC";
$result = mysql_query($sql);
 
while($row = mysql_fetch_array($result))
 echo $row['Text']."\n";
 
?>