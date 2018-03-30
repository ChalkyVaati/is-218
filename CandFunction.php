<?php
class User{
	function User(){
		
	$servername = "sql.njit.edu";
	$username = 'vc327';
	$password = 'WJtkSd43';
	$dbname = "vc327";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";
	$this->connection = $conn;
	}
	function displayAllUser(){
		$sql = "SELECT * FROM accounts";
		$result = $this->connection->query($sql);
		echo '<table style="border-style: dotted;">';
		echo '<tr>';
		echo '<th colspan="8" style="text-align: center;font-weight: bold">All Users Information</th></tr>';
		echo '<tr>';
		echo '<th style="text=align:center;font-weight:bold">ID</th>';
		echo '<th style="text=align:center;font-weight:bold">Email</th>';
		echo '<th style="text=align:center;font-weight:bold">First Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Last Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Phone</th>';
		echo '<th style="text=align:center;font-weight:bold">Birthday</th>';
		echo '<th style="text=align:center;font-weight:bold">Gender</th>';
		echo '<th style="text=align:center;font-weight:bold">Password</th>';
		echo '</tr>';
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
	}
	function deleteUser($id){
		$sql = "SELECT * FROM accounts where id = '$id'";
		$result = $this->connection->query($sql);
		echo "Deleted this record: <br>";
		echo '<table style="border-style: dashed;">';
		echo '<th style="text=align:center;font-weight:bold">ID</th>';
		echo '<th style="text=align:center;font-weight:bold">Email</th>';
		echo '<th style="text=align:center;font-weight:bold">First Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Last Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Phone</th>';
		echo '<th style="text=align:center;font-weight:bold">Birthday</th>';
		echo '<th style="text=align:center;font-weight:bold">Gender</th>';
		echo '<th style="text=align:center;font-weight:bold">Password</th>';
		echo '</tr>';
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
		$sql = "DELETE FROM accounts where id = '$id'";
		$result = $this->connection->query($sql);
	}
	function insertUser($id, $email, $fname, $lname, $phone, $birthday, $gender, $password){
		$sql = "INSERT into accounts values('$id', '$email', '$fname', '$lname', '$phone', '$birthday', '$gender', '$password')";
		$result = $this->connection->query($sql);
		$sql = "SELECT * FROM accounts where id = '$id'";
		$result = $this->connection->query($sql);
		echo "Inserted this record: <br>";
		echo '<table style="border-style: solid;">';
		echo '<th style="text=align:center;font-weight:bold">ID</th>';
		echo '<th style="text=align:center;font-weight:bold">Email</th>';
		echo '<th style="text=align:center;font-weight:bold">First Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Last Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Phone</th>';
		echo '<th style="text=align:center;font-weight:bold">Birthday</th>';
		echo '<th style="text=align:center;font-weight:bold">Gender</th>';
		echo '<th style="text=align:center;font-weight:bold">Password</th>';
		echo '</tr>';
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
	}
	function updatePassword($id, $newPassword){
		$sql = "update accounts set password = '$newPassword' where id = '$id'";
		$result = $this->connection->query($sql);
		$sql = "SELECT * FROM accounts where id = '$id'";
		$result = $this->connection->query($sql);
		echo "Updated this record: <br>";
		echo '<table style="border-style: double;">';
		echo '<th style="text=align:center;font-weight:bold">ID</th>';
		echo '<th style="text=align:center;font-weight:bold">Email</th>';
		echo '<th style="text=align:center;font-weight:bold">First Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Last Name</th>';
		echo '<th style="text=align:center;font-weight:bold">Phone</th>';
		echo '<th style="text=align:center;font-weight:bold">Birthday</th>';
		echo '<th style="text=align:center;font-weight:bold">Gender</th>';
		echo '<th style="text=align:center;font-weight:bold">Password</th>';
		echo '</tr>';
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["birthday"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "</tr>";
    	}
    	echo "</table>";
	}
}
$user = new User();
$user->displayAllUser();
$user->deleteUser(450);
$user->insertUser(450, 'wilpar45@gmail.com', 'Wilson', 'Parker', '-9204', '2000-07-14', 'male', 'password');
$user->updatePassword(2, '1111');
?>