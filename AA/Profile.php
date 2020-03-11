<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<table  border="1" width=35%>
		<tr>
			<td colspan="2" align="center">Profile</td>
		</tr>
		<tr>
			<td>ID</td>
			<td>16-10101-2</td>
		</tr>
		<tr>
			<td>NAME</td>
			<td>BOB</td>
		</tr>
		<tr>
			<td>USER TYPE</td>
			<td>Admin</td>
		</tr>
		<tr>
			<td align="right" colspan="2">
			<a href="Welcome Bob.php">Go Home</a>
	</td>
		</tr>


	</table>

</body>
</html>
