<!DOCTYPE>
<?php
  session_start();
  if(!isset($_SESSION['sid'])) {
	header("location: login.php");
  }
?>

<html>
<head>
<title>Doctor Schedule</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
 $host="localhost";
 $user="root";
 $pw="root";
 $db="hospital";

 $con = new mysqli ($host, $user, $pw, $db);
  
  $query="SELECT essn FROM employee WHERE doctor_flg = 'Y'";
  $result=$con->query($query);
  $rows=$result->num_rows;

  echo "There are $rows doctors.";

?>

<h4 class="header">Doctor Schedule for: </h4>
<form method="post" action="docSchedView.php">
	<select name="ssn">

		<?php
  
		while ($essn = $result->fetch_assoc()) {
			echo "<option>", $essn['essn'];
		}
		?>

	</select>

	<input type="submit" value="Get Doctor's schedule">
</form>

<?php
echo "<br><p><br><p>Session ID is ... " .$_SESSION['sid']. "<br><p>";
echo "Click <a href='logout.php'>here</a> to logout.";
?>
</body>
</html>
