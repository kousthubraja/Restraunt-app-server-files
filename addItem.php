<?php

	require_once('dbauth.php');
	
	$itemName = $_POST['itemName'];
	$price = $_POST['price'];
	
	$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);

	if($conn -> connect_error){
		die("Error");
	}
	
	$sql = "INSERT INTO items (itemName, price) VALUES ('$itemName', '$price')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>				