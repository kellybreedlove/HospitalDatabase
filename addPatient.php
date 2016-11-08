<!DOCTYPE>
<html>
<head>
<title>Add Patient</title>
</head>
<body>
<h4>Patient Information</h4>

<?php
 $host="localhost";
 $user="root";
 $pw="root";
 $db="hospital";

 $con = new mysqli ($host, $user, $pw, $db);
 
 $fname = $con->real_escape_string($_POST["fname"])
 $minit = $con->real_escape_string($_POST["minit"])
 $lname = $con->real_escape_string($_POST["lname"])
 
 $ssn = $con->real_escape_string($_POST["ssn"])
 
 $address = $con->real_escape_string($_POST["address"])
 $age = $con->real_escape_string($_POST["age"])
 $sex = $con->real_escape_string($_POST["sex"])

 $query = "SELECT * FROM patient where ssn=$ssn";
 $result = $con->query($query);
 $rows=$result->num_rows;
 
 if ($rows == 1) {
  echo "The ssn exists in the patient table.";
 }
 else {
  $query = "INSERT INTO patient (ssn, fname, minit, lname, address, salary) 
  VALUES('$ssn', '$fname', '$init', '$lname', '$address', '$sal')";
  $result = $con->query($query);
  
  if ($result) {echo "Data successfully added.";}
  else {echo "Error inserting data.";}
 }
 $con->close();
 ?>
</body>
</html>
