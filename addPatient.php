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
  
 $ssn = $con->real_escape_string($_POST["ssn"])
 $fname = $con->real_escape_string($_POST["fname"])
 $minit = $con->real_escape_string($_POST["minit"])
 $lname = $con->real_escape_string($_POST["lname"])
 $address = $con->real_escape_string($_POST["address"])
 $sex = $con->real_escape_string($_POST["sex"])
 $age = $con->real_escape_string($_POST["age"])
 $date_admit = $con->real_escape_string($_POST["date_admit"])
 $date_disch = $con->real_escape_string($_POST["date_disch"])
 $contactno = $con->real_escape_string($_POST["contactno"])
 $info = $con->real_escape_string($_POST["info"])
 $rid = $con->real_escape_string($_POST["rid"])

 $query = "SELECT * FROM patient where ssn=$ssn";
 $result = $con->query($query);
 $rows=$result->num_rows;
 
 if ($rows == 1) {
  echo "The ssn exists in the patient table.";
 }
 else {
  $query = "INSERT INTO patient (pssn, fname, minit, lname, address, sex, age, 
  date_admit, date_disch, contactNum, info, rid) 
  VALUES('$ssn', '$fname', '$minit', '$lname', '$address', '$sex', '$age', 
  '$date_admit', '$date_disch', '$contactno', '$info', '$rid')";
  $result = $con->query($query);
  
  if ($result) {echo "Data successfully added.";}
  else {echo "Error inserting data.";}
 }
 $con->close();
 ?>
</body>
</html>
