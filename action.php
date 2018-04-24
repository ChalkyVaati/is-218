<?php
session_start();
		$servername = "sql.njit.edu";
		$username = "vc327";
		$password = "WJtkSd43";
		$dbname = "vc327";

$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

if(isset($_POST['deleteItem']))
{
	$delete = $_POST['deleteItem'];
	$stmt = $conn->prepare("DELETE FROM todos WHERE id = '$delete' ")
	$stmt->execute();
}
