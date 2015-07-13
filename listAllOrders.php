<?php

	require_once('dbauth.php');
	
	/////////////////////////////////////////////////////////////////////////////
	$sql = "SELECT * FROM `orders` WHERE `status` = 'PLACED' ORDER BY `orderid` DESC";// WHERE userid=20;";
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$rows = array();
		
		while($r = $result->fetch_assoc()) {
			
			$json = json_decode($r['itemjson'], true);
			$userName = $json['userName'];
			$items = $json["items"];
			$itemMsg = $r['date']."\t\t\t|\t\t\tAmount : ". $r['totalPrice']."\n\n";
			
			foreach($items as $item){
				foreach($item as $i=>$quantity){
					$sql2 = "SELECT itemName FROM `items` WHERE id=$i";
					$result2 = $conn->query($sql2);
					$itemName = $result2->fetch_assoc();
					$itemName = $itemName['itemName'];
					//echo $itemName." * ".$quantity;
					$itemMsg = $itemMsg . $itemName." x ".$quantity . "\n";
					//echo "<br>";
				}
			}
			//echo $itemMsg;
			
			$dataItem = array();
			$dataItem["userName"] = $userName;
			$dataItem["itemMsg"] = $itemMsg;

			// push single product into final response array
			$rows[] = $dataItem;
			
			
			
/*			foreach($items as $item){
				foreach($item as $i=>$quantity){
					$sql2 = "SELECT itemName FROM `items` WHERE id=$i";
					$result2 = $conn->query($sql2);
					$itemname = $result2->fetch_assoc();
					$itemname = $itemname['itemName'];
					echo $itemName.", ";
					//print_r($i);
				}
//				print_r($item);
//				foreach($item as $i->$quantity){
	//				echo $i;
		//		}
//				print_r($item);
				echo "  ";
			}*/
			

//			$rows[] = $r;
		}

		print json_encode($rows);
			
	}
	else{
		echo "EMPTY";
	}
	/////////////////////////////////////////////////////////////////////////////
	$conn -> close();
?>