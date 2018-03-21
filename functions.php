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
    $messMess = htmlspecialchars('$row['message']);

$message = <<<DELIMETER
                <tr>
                <td>{$messAuthor}</td>
                <td>{$messMess}</td>
DELIMETER;


                echo $message;

}



}
    
// <td><img src="{$row['profile_pic']}"></td>

?>