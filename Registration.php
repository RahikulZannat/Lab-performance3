<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1></h1>


	<form>
	<fieldset>
		<legend>Registration</legend>
	<table>
		<tr>
			<td>ID: </td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
		</tr>
		
		<tr>
			<td>Password:</td>
		</tr>
		<tr>
			<td> <input type="password" name="" value=""/></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
		</tr>
		<tr>
			<td> <input type="password" name="" value=""/></td>
		</tr>
		<tr>
			<td>Name:</td>
			</tr>
			<tr>
			<td><input type="text" name="" value="" size="5" /></td>
		</tr>
		
		<tr>
			<td>User Type<hr/td>
		</tr>
		<tr>		
			<td> 
				<input type="radio" name="User" value="">User 
				<input type="radio" name="Admin" value="">Admin
				
			<hr /td>
		</tr>
		
		
		
			<tr>
			
			<td align="left">
				<input type="button" name="" value="Sign Up">
				<a href="text.html">Sign In</a>
				
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>
