<?php	
	session_start();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body> 
	
	
	<fieldset>
	<legend>Login</legend>
	<table>
	<form method="POST" action="logCheck.php">
		UserID:     <input type="text" name="uname" value=""> <br>
		<br>
		Password: <input type="password" name="password" value=""><br>

		<br>
		<input type="submit" name="submit" value="submit">
				<td align="left">
				<a href="Registration.php">Register</a>
				
			</td>
		</tr>
	
		
		
	</form>
	</table>
	</fieldset>
</body>
</html>