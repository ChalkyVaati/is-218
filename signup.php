<!DOCTYPE html>
<html >

<head>
   <title>Sign Up</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://,axcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">

</head>

<body>

<div class="container">
  <section id="content">
    <?php
    error_reporting(E_ALL); ini_set('display_errors', '1');
    // define variables and set to empty values

    //Validation of email
    $emailErr = "";
    $fname = $lname = $email = $Upassword = $phone = $gender = $birthday = "";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    	if (empty($_POST["email"])) {
    		$emailErr = "*Email is required";
    	}
    	else {
    		$email = test_input($_POST["email"]);
    		// check if e-mail address is well-formed
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    			$emailErr = "Invalid email format";
    		}
    	}
    	$fname = ($_POST["fname"]);
    	$lname = ($_POST["lname"]);
    	$Upassword = ($_POST["password"]);
    	$phone = ($_POST["phone"]);
    	$birthday = ($_POST["Bday"]);
    	$gender = ($_POST["gender"]);


    	if (!empty($_POST["email"])) {
    		$servername = "sql.njit.edu";
    		$username = "vc327";
    		$password = "WJtkSd43";
    		$dbname = "vc327";

    		try {
    			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    			echo "Connected Successfully! <br>";
    			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			$stmt = $conn->prepare("SELECT email FROM accounts WHERE email = '$email'");
    			$stmt->execute();

    			// set the resulting array to associative
    			$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    			$v = '';
    			foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {

    			}

    			if ($v != ''){
    				$emailErr = "*Email has already been used.";
    			}
    			else{
    				$conn = null;
    				$servername = "sql.njit.edu";
    				$username = "vc327";
    				$password = "WJtkSd43";
    				$dbname = "vc327";
    				try {
    					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    					// set the PDO error mode to exception
    					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    					$sql = "INSERT INTO accounts (fname, lname, email, phone, birthday, gender, password)
    					VALUES ('$fname', '$lname', '$email', '$phone', '$birthday', '$gender', '$Upassword')";
    					// use exec() because no results are returned
    					$conn->exec($sql);
    					echo "New record created successfully";
    				}
    	

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>
    <div style="margin-top:20px">
      <div style="width:400px; margin:auto; background-color: white; padding: 8px; border: solid; border-color: #cccccc">
        <h2 style="text-align: center;">Sign Up Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h1>Login Form</h1>
      <div class="form-group" >
        <label for ="fname">First Name:</label>
        <input type="text" class="form-control" placeholder="Enter First Name" required="" id="fname" name="fname" />
      </div>
      <div class="form-group" >
        <label for ="lname">Last Name:</label>
        <input type="text" class="form-control" placeholder="Enter Last Name" required="" id="lname" name="lname"/>
      </div>
      <div class="form-group">
        <label for ="email">Email:</label>
        <input type ="email" class="form-control" placeholder="Enter Email" id="email" name="email" value="<?php echo $email;?>">
         <span style="color:red"><?php echo $emailErr;?></span>
      </div>
       
      <div class="col">
        <select id="gender" name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>
      <button type="submit" class="btn btn-basic btn-block">  <div style="font-family: Oswald; font-size:22px">Submit</button>
    </form>

  </section>
</div>
</body>

</html>
