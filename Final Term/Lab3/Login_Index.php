<html>
	<head></head>
	<body>
		<fieldset>
			<form action=""  onsubmit="return validate()" method="post">
			<center>
			<h1> Welcome to Index.....!! <br> Please login</h1>
			
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username"><span id="err_username"></span></td>
						
						
					</tr>
					<tr>
						<td>Password:</td>
						
						<td><input type="password"  name="password"><span id="err_password"></span></td>
						
					<tr>	
				
						<td colspan="2" align="right">
							<input type="submit" name="login" value="Login">
						</td>
					</tr>
				</table>
			</center>	
			</form>
			<script src="JS validation/Login_Index_Valitation.js"></script>
		</fieldset>
	</body>
</html>