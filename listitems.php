<?php

	require_once('dbauth.php');

	/////////////////////////////////////////////////////////////////////////////
	$sql = "SELECT * FROM `items`";
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$rows = array();
		while($r = $result->fetch_assoc()) {
			$rows[] = $r;
		}
		print json_encode($rows);
		
	}
	else{
		echo "EMPTY";
	}
	/////////////////////////////////////////////////////////////////////////////
	$conn -> close();
?>