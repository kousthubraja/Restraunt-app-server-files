<?php

	require_once('dbauth.php');
	require_once('gcm_sendmsg.php');
	
	$orderId = $_POST['orderId'];
	//$orderId = 35;
	//$sql = "INSERT INTO orders (userId, orderJSON) VALUES ('$itemId', '$price')";
	
	$sql = "UPDATE `orders` SET `status` = 'CANCELED' WHERE `orderid` = $orderId;";

	if ($conn->query($sql) === TRUE) {
		$sql3 = "SELECT `userName`,`totalPrice` FROM `OwnerBankAccount` WHERE `orderId` = $orderId";
		$result = $conn->query($sql3);
		
		$result = $result->fetch_array();
		
		$userName = $result[0];
		$totalPrice = $result[1];

		$sql2 = "INSERT INTO `a1575314_sulthan`.`OwnerBankAccount` (`userName` , `orderId`, `payDirection` ,`totalPrice`) VALUES ('$userName', $orderId, 'SENT', $totalPrice);";
		echo $sql2;
		$conn->query($sql2);
		echo "Order canceled";
		sendGCM("An order has been cancelled");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>