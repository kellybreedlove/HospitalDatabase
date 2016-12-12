<!DOCTYPE>
<html>
<head>
<title>Employee Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php if (isset($_GET['msg'])) echo "Login error. Try again."; ?>
<h2>Login Credentials</h2>
<form name = "addform" action="loginProc.php" method="post">
 Emp Ssn: <input type = "text" name="ssn" size="9" maxlength="9"><br><p>
 First Name: <input type = "text" name="fname" size="15" maxlength="15"><br><p>
 Last Name: <input type = "text" name="lname" size="15" maxlength="15"><br><p>
  <input type="submit" value="Login">
</form>
<br> <p>
</body>
</html>
