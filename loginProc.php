<html>
<head>
  	<title>Successful Login</title>
	  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php	
	$host="localhost";
	$user="root";
	$pw="root";
	$db="hospital";

	$con = new mysqli ($host, $user, $pw, $db);

	if ($con->connect_error) {
		die('Error : ('. $con->connect_errno .') '. $con->connect_error);
	}

	$ssn = $con->real_escape_string($_POST["ssn"]);
	$fname = $con->real_escape_string($_POST["fname"]);
	$lname = $con->real_escape_string($_POST["lname"]);

	$query = "SELECT * FROM employee WHERE essn='$ssn' and fname = '$fname' and lname = '$lname'";
    $result = $con->query($query);
	$rows = $result->num_rows;

	// Login successful.
	if ($rows == 1) {
		session_start();
		$_SESSION['sid']=session_id();
	  	echo "Login successful. <br><p>";
	  	echo "Session ID is ..." .$_SESSION['sid']. "<br><p>";
  		echo '<a href="home.php">Home</a>'. "<br><p>";		
  		echo "Click <a href='logout.php'>here</a> to logout.";
	}
	else
	{
		header("location: login.php?msg");
	}
	 $con->close();
?>
