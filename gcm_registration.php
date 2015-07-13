<?php

	require_once('dbauth.php');
	
	$regId = $_POST['regId'];
	
	$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);

	if($conn -> connect_error){
		die("Error");
	}
	
	$sql = "INSERT INTO owners (regId) VALUES ('$regId')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>				