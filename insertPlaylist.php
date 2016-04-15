<?php include 'conn.php' ?>

<?php
$party_name = $_POST ["party_name"];

$sql_insert = "insert into musicqdb.playlist values('$party_name')"

if(mysqli_query($con,sql_query ))
?>