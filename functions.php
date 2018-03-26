<?php


function confirm($result) {
    if(!$result) {
die("QUERY FAILED " . msqli_error($conn));
    }
}

function query($sql){
    global $conn;
    return mysqli_query($conn, $sql);
}

function fetch_array($result) {
    return mysqli_fetch_array($result);
}


function message() {

  $query = query("SELECT message.MessageID, message.message, user.Username, admin.IconID FROM message INNER JOIN user ON user.CustomerID = message.CustomerID INNER JOIN admin ON message.IconID = admin.IconID");
  confirm($query);

while($row = fetch_array($query)) {
    if($row['IconID'] == 1) {
      $adminicon = "assets/adminicon.png";
    }
    $auth = $row['Username'];
    $mess = $row['message'];
    $messAuthor = htmlspecialchars($auth);
    $messMess = htmlspecialchars($mess);
    echo "<tr>";
    echo "<td><img src='$adminicon'/>$messAuthor</td>";
    echo "<td>$messMess</td>";
    echo "</tr>";
    // echo $message;
}



}
}

// <td><img src="{$row['profile_pic']}"></td>

?>
