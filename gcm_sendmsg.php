<?php
	// API access key from Google API's Console
	define( 'API_ACCESS_KEY', 'AIzaSyDVVVTVhxkVrDDKq4XHD2XdSqwvDqmWc-4' );
	
	require_once('dbauth.php');
 
	
	$message = $_GET['msg'];
//	sendGCM($message);
        //$message = "Working";
//	function sendGCM($message){
		$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
		
		if($conn -> connect_error){
			die("Error");
		}
	 
		$sql = "SELECT regId FROM owners";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$registrationIds [] = $row['regId'];
							echo $row['regId'];
			}
		}

		// prep the bundle
		$msg = array
		(
			'message' 	=> $message,
		);

		$fields = array
		(
			'registration_ids' 	=> $registrationIds,
			'data'			=> $msg
		);
		 
		$headers = array
		(
			'Authorization: key=' . API_ACCESS_KEY,
			'Content-Type: application/json'
		);
		 
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://android.googleapis.com/gcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		curl_close( $ch );

		echo json_decode($result, true);
		echo '\nHELLO';

		$conn->close();
//		}

?>			