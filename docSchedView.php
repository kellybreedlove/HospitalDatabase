<!DOCTYPE html>
<html>
	<head>
	<title>View Doctor Schedule</title>
	<link rel="stylesheet" href="style.css">
	</head>

<body>
<h4 class ="header">Doctor Schedule</h4>

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
    echo "<table class='one'>";
    echo "<tr id='make-uc'> 
			<th class='header'> SSN </th>
      <th class='header'> Date</th>
			<th class='header'> Time</th>
			<th class='header'> Patient Fist Name </th>
			<th class='header'> Patient Last Name </th> 
			<th class='header'> Patient Info </th> 
			<th class='header'> Procedure Code </th> 
			<th class='header'> Procedure Description </th> 
			<th class='header'> Hospital </th> 
			<th class='header'> Room ID </th>
		 </tr>";
   
     while ($row = $result->fetch_assoc()) {
       print "<tr>";
       print "<td class='a'>".$row['essn']."</td>";
       print "<td class='a'>".$row['pdate']."</td>";
       print "<td class='a'>".$row['ptime']."</td>";
       print "<td class='a'>".$row['fname']."</td>";
       print "<td class='a'>".$row['lname']."</td>";
       print "<td class='a'>".$row['info']."</td>";
       print "<td class='a'>".$row['pcode']."</td>";
       print "<td class='a'>".$row['pdescr']."</td>";
       print "<td class='a'>".$row['hname']."</td>";
       print "<td class='a'>".$row['rid']."</td>";
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
