<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <body>
   
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#e6e6e6">
<?php
error_reporting(E_ALL); ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
   $servername = "sql2.njit.edu";
	$username = "jcm44";
	$password = "lq40ntX5";
	$dbname = "jcm44";
		
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		//echo "Connected Successfully! <br>";
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$email = $_SESSION["email"];
		$task = ($_POST["task"]);
		$ddate = ($_POST["ddate"]);
		$cdate = ($_POST["cdate"]);
		$isdone = 0;

		$query = "INSERT INTO todos (owneremail, createddate, duedate, message, isdone)
              VALUES ('$email', '$cdate', '$ddate', '$task', '$isdone')";
		$statement = $conn->prepare($query);
		$statement->execute();
    } 
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	
}
?>
	
	
<div style="margin-top:20px">
<div style="width:400px; margin:auto; background-color:white; padding:8px; border:solid; border-color:#cccccc">
  <h2 style="text-align:center; font-family: 'Press Start 2P'; ">Add Task</h2>
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
      <label for="task">Task:</label>
      <input type="text" class="form-control" id="task" placeholder="What needs to be done?" name="task">
    </div>
	<div class="form-group">
      <label for="cdate">Todays Date:</label>
      <input type="date" class="form-control" id="cdate" name="cdate">
    </div>
	<div class="form-group">
      <label for="ddate">Due Date:</label>
      <input type="date" class="form-control" id="ddate" name="ddate">
    </div>
	    <button
    <button
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>
</div>
</div>

</body>
</html>
<style>
	html{
  font-family:'Press Start 2P';
}
label{
  font-family:'Press Start 2P';
  font-size: 13px;
}
button.btn.btn-primary.btn-block{
  font-family:'Press Start 2P';
}
body{
  
    background-image: url("http://1.bp.blogspot.com/-Dc5IaBU15T0/VAFBb4AotGI/AAAAAAAALSg/hUmHzxVSzO4/s1600/Pac%2BMan%2B5.gif");

}
</style>