<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['sid'])) {
	header("location: login.php");
  }
?>

<html>
<head>
  	<title>Patient Search</title>
	  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
  $host="localhost";
  $user="root";
  $pw="root";
  $db="hospital";

  $con = new mysqli ($host, $user, $pw, $db);

  $query="SELECT pssn FROM patient";
  $result=$con->query($query);
  $rows=$result->num_rows;

  echo "There are $rows patients.";

?>

<h4 class="header">Patient Details for: </h4>
<form method="post" action="patientView.php">
	<select name="ssn">

		<?php
  
		while ($pssn = $result->fetch_assoc()) {
			echo "<option>", $pssn['pssn'];
		}
		?>

	</select>

	<input type="submit" value="Get Patient Details">
</form>

<?php
echo "<br><p><br><p>Session ID is ... " .$_SESSION['sid']. "<br><p>";
echo "Click <a href='logout.php'>here</a> to logout.";
?>

</body>
</html>
