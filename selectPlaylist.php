<?php
require "conn.php";
$user_name = "";
$user_pass = "";
$mysql_qry = "select * from playlist"

$result = mysql_qry($conn, $mysql_qry);

if(mysqli_num_rows($result) > 0){
echo "Playlist empty";
}
else{
echo "Playlist success"
}
?>