<html>
	
	<body>
		<center>
		<fieldset>
		
			<form action="" onsubmit="return validate()" method="post">
				<h1> Welcome to Registeration.............!!!!!</h1>
				<table>
				
					
					<tr>
						<td> Name:</td>
						<td><input type="text"  name="name"><span id="err_name"></span></td>
						
					</tr>
					<tr>
						<td>User Name:</td>
						<td><input type="text"  name="username"><span id="err_username"></span></td>
						
					</tr>
					<tr>					
						<td>Password:</td>
						<td><input type="password"  name="password"><span id="err_password"></span></td>
						
					</tr>
					<tr>	
						<td>Email:</td>
						<td><input type="text"  name="email"><span id="err_email"></span></td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td><input type="text" name="contact"><span id="err_contact"></span></td>
						
					</tr>
				
					
					<tr>
						<td></td>
						<td colspan="2" align="center">
							<input type="submit" name="Register" value="Register">
						</td>
						
					</tr>					
				</table>
			
			</form>
			<script src="JS validation/Registration_Valitation.js"></script>
			
		</fieldset>
		</center>
	</body>
</html>