<?php include 'conn.php' ?>

<?php
$party_name = $_POST ["party_name"];

$sql_insert = "insert into musicqdb.playlist(playlistId,playlistName) values(null,'$party_name')"

$result = $conn->query($sql_insert);

if($result === TRUE){
	
	echo"insert sucessful!";
}

else{
	echo "Error: ". $sql_insert . "<br>" . $conn->error;
	
}
$conn->close();

?>