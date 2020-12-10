<?php 
	include 'main_header.php';
	require_once "../Controller/login_validation.php";
?>

<!--login starts -->
<html>
	
	<body>
		<fieldset>
			<form action="" method="post">
			<center>
			<h1> Welcome to Index.....!! <br> Please login</h1>
				<table>
					<tr>
						<td><strong>Username:</strong></td>
						<td><input type="text" id="username" name="username"><span id="err_username"></span></td>
						
						
					</tr>
					<tr>
						<td><strong>Password:</strong></td>
						
						<td><input type="password" id="password" name="password"><span id="err_password"></span></td>
						
					<tr>	
				
						<td colspan="2" align="right">
							<input type="submit" id="Login" name="Login" value="Login">
						</td>
					</tr>
				</table>
			</center>	
			</form>
			<a href="registration.php">Not registered yet? Register</a>
			<script src="JS Validation/login_validation.js"></script>
		</fieldset>
	</body>
</html>


<!--login ends -->
<?php include 'main_footer.php'; ?>