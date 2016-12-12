<html>
<head>
  	<title>Logout</title>
	  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();

session_unset();
session_destroy();

echo "Logged out successfully!";
?>
