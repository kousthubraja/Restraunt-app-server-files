<?php

	require_once('dbauth.php');

	$name = $_POST['name'];
	$creditCard = $_POST['creditCard'];


	/////////////////////////////////////////////////////////////////////////////
	$sql = "INSERT INTO `$mysql_database`.`users` (`id`  ,`name` ,`creditcard`) VALUES (NULL , '$name', '$creditCard');";
	
//echo $sql;
	if($conn -> query($sql) === TRUE){
		$sql2 = "SELECT max(`id`) FROM `$mysql_database`.`users`;";
		$result = $conn->query($sql2);
		
		$result = $result->fetch_array();
		$id = $result[0];
		echo($id);
		
	}
	else{
		echo "ERROR";
	}
	/////////////////////////////////////////////////////////////////////////////
	$conn -> close();
?>