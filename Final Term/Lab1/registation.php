<?php
	
	include_once "registration_validation.php";
?>

	
<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
	<html>
	<head></head>
	<body><h1 align="center">Welcome to Registation....</h1>
		<center>
		<fieldset style="background-color:powderblue;height:50%;width:40%">
		* Fields are required
			<form action="" method="post">
				<table><h1 align="center">Please fill up the form....</h1>
					
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr><tr></tr><tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr><tr></tr><tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr><tr></tr><tr></tr><tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr><tr></tr><tr></tr>
					<tr>
						<td align="right"><strong>User Name:</strong></td>
						<td><input type="text" placeholder="* Write your username" value="<?php echo $username?>" name="username"></td>
						<td><span style="color:red;"><?php echo $err_username;?></span>
						</td>
					</tr>
					
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr><tr></tr><tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr><tr></tr><tr></tr>
					<tr>
						<td align="right"><strong>Password:</strong></td>
						<td><input type="password" placeholder="* Enter your password" value="<?php echo $password?>" name="password"></td>
						<td><span style="color:red;"><?php echo $err_password;?></span>
						</td>
					</tr>
					
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr><tr></tr><tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr><tr></tr><tr></tr>
					<tr></tr><tr></tr>
					<tr></tr>
					<tr>
						<td align="right"><strong>Type:</strong></td>
						<td><input type="password" placeholder="* Enter user type" value="<?php echo $type?>" name="type"></td>
						<td><span style="color:red;"><?php echo $err_type;?></span>
						</td>
					</tr>
					
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr><tr></tr><tr></tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" style="color:Blue" name="register" value="register">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
		</center>
	</body>
</html>
	</body>
	
</html>