<!DOCTYPE>
<html>
<head>
<title>Employee Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h4>Login Credentials</h4>

<?php
	$host="localhost";
	$user="root";
	$pw="root";
	$db="hospital";

	$con = new mysqli ($host, $user, $pw, $db);

	$ssn = $con->real_escape_string($_POST["ssn"]);
	$fname = $con->real_escape_string($_POST["fname"]);
	$lname = $con->real_escape_string($_POST["lname"]);

	$query = "SELECT * FROM employee WHERE essn='$ssn' and fname = '$fname' and lname = '$lname'";
  $result = $con->query($query);
	$rows = $result->num_rows;

	// Login successful.
	if ($rows == 1) {
  	echo "Login successful.";
  	echo '<br>';
  	echo '<a href="home.html">Home</a>';		
	}
	else
	{
		echo "Invalid Login Credentials.";
	}
	 $con->close();
?>

</body>
</html>
