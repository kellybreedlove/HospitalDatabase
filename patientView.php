<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['sid'])) {
	header("location: login.php");
  }
?>

<html>
	<head>
	<title>View Patient Details</title>
  <link rel="stylesheet" href="style.css">
	</head>

<body>
<h4 class="header">Patient Information</h4>

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
    echo "<table class='one'>";
    echo "<tr id='make-uc'> 
			<th class='header'> SSN </th>
      <th class='header'> First Name</th>
			<th class='header'> Last Name</th>
			<th class='header'> Address </th>
			<th class='header'> Sex </th> 
			<th class='header'> Age </th> 
			<th class='header'> Date Admitted </th> 
			<th class='header'> Date Discharged </th> 
			<th class='header'> Contact Number </th> 
			<th class='header'> Information </th> 
			<th class='header'> Room ID </th> 
		 </tr>";
   
     while ($row = $result->fetch_assoc()) {
       print "<tr>";
       print "<td class='a'>".$row['pssn']."</td>";
       print "<td class='a'>".$row['fname']."</td>";
       print "<td class='a'>".$row['lname']."</td>";
       print "<td class='a'>".$row['address']."</td>";
       print "<td class='a'>".$row['sex']."</td>";
       print "<td class='a'>".$row['age']."</td>";
       print "<td class='a'>".$row['date_admit']."</td>";
       print "<td class='a'>".$row['date_disch']."</td>";
       print "<td class='a'>".$row['contactNum']."</td>";
       print "<td class='a'>".$row['info']."</td>";
       print "<td class='a'>".$row['rid']."</td>";
       print "</tr>";
     }
     echo "</table>";
   }
   else {
     echo "No patient with the ssn.";
   }

?>

<?php
echo "<br><p><br><p>Session ID is ... " .$_SESSION['sid']. "<br><p>";
echo "Click <a href='logout.php'>here</a> to logout.";
?>

</body>
</html>
