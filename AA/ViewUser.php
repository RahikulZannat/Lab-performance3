<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<table  border="1" width=35%>
		<tr>
			<td colspan="3" align="center">Profile</td>
		</tr>
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>USER TYPE</td>
		</tr>
		<tr>
			<td>15-10101-1</td>
			<td>Bob</td>
			<td>Admin</td>
		</tr>
		<tr>
			<td>16-10102-2</td>
			<td>Anne</td>
			<td>User</td>
		</tr>
		<tr>
			<td>16-10103-2</td>
			<td>Kent</td>
			<td>User</td>
		</tr>
		<tr>
			<td>16-10104-13</td>
			<td>James</td>
			<td>Admin</td>
		</tr>
		<tr>
			<td align="right" colspan="3">
			<a href="Welcome Bob.php">Go Home</a>
	</td>
		</tr>


	</table>

</body>
</html>
