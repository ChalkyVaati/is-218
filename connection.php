<?php
	$server = "sql.njit.edu";
	$db_name = "vc327";
	$db_user = "vc327"; 
	$db_pass = "WJtkSd43"; 
	
	mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
	mysql_select_db($db_name) or die("Could not connect to database!");
	
?>