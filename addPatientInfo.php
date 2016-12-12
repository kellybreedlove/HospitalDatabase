<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['sid'])) {
	header("location: login.php");
  }
?>

<html>
<head>
	<title> Add Patient </title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<h4 class="header"> Add Patient Information</h4>

	<form name="addform"  action="addPatient.php" method="post">
		<tablewidth="60%" border="0" cellpadding="3" cellspacing="12">

	<tr id ="make-uc">
		<td class="a"><strong>First Name: </strong>*</td>
		<td><input name="fname" type="text" size="15" maxlength="15" /></td>
	</tr>

	<tr id ="make-uc">
		<td class="a"><strong>Middle Initial: </strong>*</td>
		<td><input name="minit" type="text" size="1" maxlength="1" /></td>
	</tr>

	<tr id ="make-uc">
		<td class="a"><strong>Last Name: </strong>*</td>
		<td><input name="lname" type="text" size="15" maxlength="15" /></td>
	</tr> <br>

	<tr id ="make-uc">
		<td class="a"><strong>SSN: </strong>*</td>
		<td><input name="ssn" type="text" size="9" maxlength="9" /></td>
	</tr>

	<tr id ="make-uc">
		<td class="a"><strong>Sex: </strong>*</td>
		<td><input name="sex" type="text" size="1" maxlength="1" /></td>
	</tr>
	
	<tr id ="make-uc">
		<td class="a"><strong>Age: </strong>*</td>
		<td><input name="age" type="number" size="3" maxlength="3" /></td>
	</tr><br>

	<tr id ="make-uc">
		<td class="a""><strong>Address: </strong>*</td>
		<td><input name="address" type="text" size="45" maxlength="45" /></td>
	</tr>

	<tr id ="make-uc">
		<td class="a"><strong>Contact No.: </strong>*</td>
		<td><input name="contactno" type="text" size="10" maxlength="10" /></td>
	</tr><br>
	
	<tr id ="make-uc">
		<td class="a"><strong>Date Admitted: </strong>*</td>
		<td><input name="date_admit" type="date" size="20" maxlength="20" /></td>
	</tr>

	<tr id ="make-uc">
		<td class="a"><strong>Date Discharged: </strong>*</td>
		<td><input name="date_disch" type="date" size="20" maxlength="20" /></td>
	</tr>
	
	<tr id ="make-uc">
		<td class="a"><strong>Room ID: </strong>*</td>
		<td><input name="rid" type="text" size="9" maxlength="9" /></td>
	</tr><br>

	<tr id ="make-uc">
		<td class="a"><strong>Information: </strong>*</td>
		<td><input name="info" type="text" size="100" maxlength="200" /></td>
	</tr><br>
	
	<h5>* required</h5>
	
	<tr id ="make-uc">
		<td class="a"></td>
		<td><input type="reset" name="Reset" value="Reset" />
		<input type="submit" name="Submit" value="Submit" /></td>
	</tr><br>

	</table>
	</form>
	
<?php
echo "<br><p><br><p>Session ID is ... " .$_SESSION['sid']. "<br><p>";
echo "Click <a href='logout.php'>here</a> to logout.";
?>

</body>
</html>
