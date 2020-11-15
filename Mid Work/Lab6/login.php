<?php
	include_once "php_validation/login_validation.php" ;
?>

<html>
	<head></head>
	<body>
		<fieldset>
			<form action="" method="post">
				<table>
					<tr>
						<td>Username:</td>
					</tr>
					<tr>					
						<td><input type="text" value="<?php echo $username?>" name="username"></td>
						<td><span style="color:red"><?php echo $err_username;?></span></td>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
					</tr>
					<tr>	
						<td><input type="password" value="<?php echo $password?>" name="password"></td>
						<td><span style="color:red"><?php echo $err_password;?></span></td>
						</td>
				
						<td colspan="2" align="right">
							<input type="submit" name="login" value="Login">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>
