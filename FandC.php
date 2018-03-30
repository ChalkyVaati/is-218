<?php
class User{
	 function __construct() {
$servername = "sql.njit.edu";
$username = "vc327";
$password = "WJtkSd43";
$dbname = "vc327";
$email = $_SESSION["email"];

try {
    $conn = new mysqli("mysql:host=$servername;dbname=$dbname", $username, $password);
	echo "Connected Successfully! <br>";
    $conn->setAttribute(mysqli::ATTR_ERRMODE, mysqli::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT fname, lname FROM accounts WHERE email = '$email'");
    $stmt->execute();

    // set the resulting array to associative
       }


catch(mysqli $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
          $conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
} 

class select extends User {
    function __construct() {
        parent::__construct();
         function selection($select) {

$select = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($select);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}            
        }
        
    }
}

class insert extends User {
	 function insert($insert) {
            $insert = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$insert .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$insert .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $insert)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conn);
}

        }
    // inherits BaseClass's constructor
}

class delete extends User {
	 function delete($delete) {
            $delete = "DELETE FROM MyGuests WHERE id=3";

if (mysqli_query($conn, $delete)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

        }
    // inherits BaseClass's constructor
}

class update extends User {
	function update($update) {
        	$update = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($update) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
    // inherits BaseClass's constructor
}
// In BaseClass constructor


     

       
        

        }

 

   
$f = new User(self,'John','Doe','JohnDoefosho@gmail.com');
$select = new select();
$insert = new insert();
$delete = new delete();
$update = new update();

?>