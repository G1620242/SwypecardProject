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

$query = query("SELECT * FROM message");
confirm($query);

while($row = fetch_array($query)) {
    $messAuthor = htmlspecialchars('$row['author']');
    $messMess = htmlspecialchars('$row['message']');
    echo "<tr>";
    echo "<td>{$messAuthor}</td>";
    echo "<td>{$messMess}</td>";
    echo "</tr>";
    // echo $message;
}



}

// <td><img src="{$row['profile_pic']}"></td>

?>
