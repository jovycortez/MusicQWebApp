<?php
require "conn.php";
$user_name = "";
$user_pass = "";
$mysql_qry = "select * from playlist"

$result = mysql_qry($conn, $mysql_qry);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close() 
?>