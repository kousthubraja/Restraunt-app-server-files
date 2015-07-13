<?php

	require_once('dbauth.php');

	$userId = $_POST['userId'];
	
	/////////////////////////////////////////////////////////////////////////////
	$sql = "SELECT `orderid`,`date`, `totalPrice` FROM `orders` WHERE userid=$userId AND `status`='PLACED';";
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$rows = array();
		
		while($r = $result->fetch_assoc()) {
			//print_r(json_encode($r));
			//$rows[] = $r;
			//print_r($r);
/*			
			$json = json_decode($r['itemjson'], true);
			//print_r($json);
			$userName = $json['userName'];
			echo $userName. " : ";
			$items = $json["items"];
			echo $items;
			foreach($items as $item){
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
			}
			echo "<br>";
*/			$rows[] = $r;
		}

		print json_encode($rows);
			
	}
	else{
		echo "EMPTY";
	}
	/////////////////////////////////////////////////////////////////////////////
	$conn -> close();
?>