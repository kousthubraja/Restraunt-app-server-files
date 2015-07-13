<?php

	require_once('dbauth.php');

	/////////////////////////////////////////////////////////////////////////////
	$sql = "SELECT `userName` , `payDirection` , `transTime`, `totalPrice` FROM `OwnerBankAccount` ORDER BY `transId` DESC";
	
	$result = $conn->query($sql);
	
	
	if($result->num_rows > 0){

		echo "<table border='2'>";
		echo "<tr>";
		echo "<td><b>User Name</b></td>";
		echo "<td><b>Transaction Type</b></td>";
		echo "<td><b>Transaction Time</b></td>";
		echo "<td><b>Bill Amount</b></td>";
		echo "</tr>";
		while($r = $result->fetch_array()) {
			echo "<tr>";
			echo "<td>".$r[0]."</td>";
			echo "<td><center>".$r[1]."</center></td>";
			echo "<td>".$r[2]."</td>";
			echo "<td><div align ='right'>".$r[3]."</div></td>";
			echo "</tr>";
		}
	
    echo "</table>";
	
	}
	else{
		echo "EMPTY";
	}
	/////////////////////////////////////////////////////////////////////////////
	$conn -> close();
?>