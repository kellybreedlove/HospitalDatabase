<!DOCTYPE html>
<html>
	<head>
	<title>View Doctor Schedule</title>
	</head>

<body>
<h4>Doctor Schedule</h4>

<?php
  $host="localhost";
  $user="root";
  $pw="root";
  $db="hospital";

  $con = new mysqli ($host, $user, $pw, $db);

  $ssn=$_POST["ssn"];
    
  $query="SELECT * FROM employee AS E, procedures AS P, room AS R, hospital AS H, patient AS X 
  WHERE E.essn=$ssn AND E.essn = P.essn AND P.rid = R.rid AND R.hid = H.hid AND P.pssn = X.pssn
  ORDER BY P.pdate, P.ptime";
  $result=$con->query($query);
  $rows=$result->num_rows;
  

  if ($rows >= 1) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr> 
			<th> SSN </th>
      <th> Date</th>
			<th> Time</th>
			<th> Patient Fist Name </th>
			<th> Patient Last Name </th> 
			<th> Patient Info </th> 
			<th> Procedure Code </th> 
			<th> Procedure Description </th> 
			<th> Hospital </th> 
			<th> Room ID </th>
		 </tr>";
   
     while ($row = $result->fetch_assoc()) {
       print "<tr>";
       print "<td>".$row['essn']."</td>";
       print "<td>".$row['pdate']."</td>";
       print "<td>".$row['ptime']."</td>";
       print "<td>".$row['fname']."</td>";
       print "<td>".$row['lname']."</td>";
       print "<td>".$row['info']."</td>";
       print "<td>".$row['pcode']."</td>";
       print "<td>".$row['pdescr']."</td>";
       print "<td>".$row['hname']."</td>";
       print "<td>".$row['rid']."</td>";
       print "</tr>";
     }
     echo "</table>";
   }
   else {
     echo "There was a problem.";
   }

?>


</body>
</html>
