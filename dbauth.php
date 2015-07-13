<?php

	$mysql_host = "mysql6.000webhost.com";
	$mysql_database = "a1575314_sulthan";
	$mysql_user = "a1575314_sulthan";
	$mysql_password = "sulthan1";
	
	define ("host", "mysql6.000webhost.com");
	define ("db", "a1575314_sulthan");
	define ("user", "a1575314_sulthan");
	define ("pwd", "sulthan1");

	$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
		
	if($conn -> connect_error){
		die("Error");
	}


?>