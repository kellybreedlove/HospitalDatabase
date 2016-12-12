<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['sid'])) {
	header("location: login.php");
  }
?>

<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h4 class="header">Home</h4>
<a href="addPatientInfo.php">Add Patient</a><br>
<a href="patient.php">View Patient</a><br>
<a href="docSched.php">View Doctor Schedule</a><br>
<?php
echo "<br><p><br><p>Session ID is ... " .$_SESSION['sid']. "<br><p>";
echo "Click <a href='logout.php'>here</a> to logout.";
?>

</body>
</html>
