<?php

//This function is to validate the query and output and error if it doesnt work
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
//Inner join used to connect the message ID and the Message and joins it by CustomerID
  $query = query("SELECT message.MessageID, message.message, user.Username FROM message INNER JOIN user ON user.CustomerID = message.CustomerID ORDER BY MessageID DESC");
  confirm($query);
//The while loop is used to continually fetch the query which includes the inner join
while($row = fetch_array($query)) {
    $auth = $row['Username'];
    $mess = $row['message'];
    // This is setting that doesnt allow html5 code so the website cannot be edited through the message
    $messAuthor = htmlspecialchars($auth);
    $messMess = htmlspecialchars($mess);
    echo "<tr>";
    echo "<td>$messAuthor</td>";
    echo "<td>$messMess</td>";
    echo "</tr>";
}



}


?>
