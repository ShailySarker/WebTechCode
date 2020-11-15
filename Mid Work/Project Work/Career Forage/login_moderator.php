<?php 
	include_once "all_validation/login_moderator_validation.php";
?>
<html>
	<head></head>
	<body>
		
		<fieldset>
		* Fields are required
			<form action="" method="post">
				<table>
					<tr>
						<td align="right"><strong>User Name:</strong></td>
						<td><input type="text" placeholder="* Write your username" value="<?php echo $username?>" name="username"></td>
						<td><span style="color:red;"><?php echo $err_username;?></span>
						</td>
					</tr>
					<tr>
						<td align="right"><strong>Password:</strong></td>
						<td><input type="password" placeholder="* Enter your password" value="<?php echo $password?>" name="password"></td>
						<td><span style="color:red;"><?php echo $err_password;?></span>
						</td>
					</tr>
					<tr>	
						<td align="right"><strong>E-mail Address:</strong></td>
						<td><input type="text"  placeholder="* Write your email address" value="<?php echo $email?>" name="email"></td>
						<td><span style="color:red;"><?php echo $err_email;?></span>						
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="login" value="login">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>