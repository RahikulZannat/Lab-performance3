<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<center>
	<h1>Welcome Anne!</h1>
	<a href="Profile.php">Profile</a><br>
	<a href="Changepass.php">Change Password</a><br>
	<a href="Login.php">Logout</a>

	

</center>

</body>
</html>
