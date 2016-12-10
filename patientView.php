<!DOCTYPE html>
<html>
	<head>
	<title>View Patient Details</title>
	</head>

<body>
<h4>Patient Information</h4>

<?php
  $host="localhost";
  $user="root";
  $pw="root";
  $db="hospital";

  $con = new mysqli ($host, $user, $pw, $db);

  $ssn=$_POST["ssn"];
    
  $query="SELECT * FROM patient where pssn=$ssn";
  $result=$con->query($query);
  $rows=$result->num_rows;
  

  if ($rows == 1) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr> 
			<th> SSN </th>
      <th> First Name</th>
			<th> Last Name</th>
			<th> Address </th>
			<th> Sex </th> 
			<th> Age </th> 
			<th> Date Admitted </th> 
			<th> Date Discharged </th> 
			<th> Contact Number </th> 
			<th> Information </th> 
			<th> Room ID </th> 
		 </tr>";
   
     while ($row = $result->fetch_assoc()) {
       print "<tr>";
       print "<td>".$row['pssn']."</td>";
       print "<td>".$row['fname']."</td>";
       print "<td>".$row['lname']."</td>";
       print "<td>".$row['address']."</td>";
       print "<td>".$row['sex']."</td>";
       print "<td>".$row['age']."</td>";
       print "<td>".$row['date_admit']."</td>";
       print "<td>".$row['date_disch']."</td>";
       print "<td>".$row['contactNum']."</td>";
       print "<td>".$row['info']."</td>";
       print "<td>".$row['rid']."</td>";
       print "</tr>";
     }
     echo "</table>";
   }
   else {
     echo "No patient with the ssn.";
   }

?>


</body>
</html>
