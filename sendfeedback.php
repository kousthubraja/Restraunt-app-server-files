<?php

	require_once('dbauth.php');
	require_once('gcm_sendmsg.php');

	$name = $_POST['name'];
	$feedback = $_POST['feedback'];


	/////////////////////////////////////////////////////////////////////////////
	$sql = "INSERT INTO `$mysql_database`.`feedback` (`id` ,`name` ,`feedback`)VALUES (NULL ,'$name', '$feedback');";
	
	if($conn -> query($sql) === TRUE){
		echo "SUCCESS";
		sendGCM("A feedback recieved");
	}
	else{
		echo "ERROR";
	}
	/////////////////////////////////////////////////////////////////////////////
	$conn -> close();
?>