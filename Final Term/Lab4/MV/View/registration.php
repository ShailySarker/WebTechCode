<?php 
	include 'main_header.php';
	require_once "../Controller/registration_validation.php"; ?>

<!--registration starts -->

<html>
	
	<body>
		<center>
		<fieldset>
		
			<form action="" onsubmit="return validate1()" method="post">
				<h1> Welcome to Registeration.............!!!!!</h1>
				<table>
				
					
					<tr>
						<td><strong> Name:</strong></td>
						<td><input type="text"  id="name" name="name"><span id="err_name"></span></td>
						
					</tr>
					<tr>
						<td><strong>User Name:</strong></td>
						<td><input type="text" id="username" name="username"><span id="err_username"></span></td>
						
					</tr>
					<tr>					
						<td><strong>Password:</strong></td>
						<td><input type="password" id="password" name="password"><span id="err_password"></span></td>
						
					</tr>
					<tr>	
						<td><strong>Email:</strong></td>
						<td><input type="text" id="email" name="email"><span id="err_email"></span></td>
					</tr>
				
					
					<tr>
						<td></td>
						<td colspan="2" align="center">
							<input type="submit" id="Register" name="Register" value="Register">
						</td>
						
					</tr>					
				</table>
			
			</form>
			<a href="login.php">Already Registered? Login</a>
			
			
		</fieldset>
		</center>
	</body>
</html>

<!--registration ends -->
<?php include 'main_footer.php'; ?>