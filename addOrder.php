<?php

	require_once('dbauth.php');
	require_once('gcm_sendmsg.php');
	
	$userId = $_POST['userId'];
	$userName = $_POST['userName'];
	$orderJSON = $_POST['orderJSON'];
	$date = $_POST['date'];
	$totalPrice = $_POST['totalPrice'];
	
	$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);

	if($conn -> connect_error){
		die("Error");
	}
	
	//$sql = "INSERT INTO orders (userId, orderJSON) VALUES ('$itemId', '$price')";
	
	$sql = "INSERT INTO `a1575314_sulthan`.`orders` (`userid` , `userName`, `itemjson` ,`status`, `date`, `totalPrice`) VALUES ( $userId, '$userName', '$orderJSON', 'PLACED', '$date', '$totalPrice');";
//echo $sql;
	if ($conn->query($sql) === TRUE) {
		$sql2 = "SELECT max(`orderid`) FROM `$mysql_database`.`orders`;";
		$result = $conn->query($sql2);
		
		$result = $result->fetch_array();
		$id = $result[0];
		$transTime = date("Y-m-d H:i:s");
		$sql2 = "INSERT INTO `a1575314_sulthan`.`OwnerBankAccount` (`userName` , `orderId`, `transTime`, `payDirection` ,`totalPrice`) VALUES ('$userName', $id, '$transTime', 'RECIEVED', $totalPrice);";
		$conn->query($sql2);

		echo "Order placed successfully";
		sendGCM("New order placed");
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>