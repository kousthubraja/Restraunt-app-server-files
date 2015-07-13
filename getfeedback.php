<?php

	require_once('dbauth.php');
	
	$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);

	if($conn -> connect_error){
		die("Error");
	}

	$result = $conn->query("SELECT * FROM feedback ORDER BY id DESC");

	if ($result->num_rows > 0) {
		$data["data"] = array();

		while ($row = $result->fetch_assoc()) {
			// temp user array
			$dataItem = array();
			$dataItem["username"] = $row["name"];
			$dataItem["feedback"] = $row["feedback"];

			// push single product into final response array
			array_push($data["data"], $dataItem);
		}
	
		echo json_encode($data);
	}
	
	$conn->close();
?>				