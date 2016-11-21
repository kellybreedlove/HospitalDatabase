<! DOCTYPE html>
<html>
	<head>
	<title>Employee Login</title?
	</head>
<body>

<h4>Login Credential</h4>

<?php
	$host="localhost";
	$user="root";
	$pw="root";
	$db="hospital";

	$con = new mysqli ($host, $user, $pw, $db);

	$ssn = $con->real_escape_string($_POST["ssn"]);
	$fname = $con->real_escape_string($_POST["fname"]);
	$lname = $con->real_escape_string($_POST["lname"]);

	$query = "SELECT * FROM employee WHERE ssn='$ssn' and fname = '$fname' and lname = '$lname'";
	$result = mysqli_query($con, $query);

	$rows = $result->num_rows;

	// Login successful.
	if ($rows == 1) {
		echo "<a href='home.html'>Home</a>";
	}
	else
	{
		echo "Invalid Login Credentials.";
	}
?>

</body>
</html>
