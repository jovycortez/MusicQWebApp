<?php
$servername = "us-cdbr-azure-east-c.cloudapp.net";
$username = "b1223efdce4428";
$password = "86dec4d4";
$dbname = "MusicQdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn) {
  echo "pass";
	<h1>pass</h1>
}

?>