<?php
$servername = "us-cdbr-azure-east-c.cloudapp.net";
$username = "b1223efdce4428";
$password = "86dec4d4";
$dbname = "MusicQdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}else{
	echo "pass";
	<h1>pass</h1>
}


?>