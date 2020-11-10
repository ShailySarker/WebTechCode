<html>
	<head>
		<title>Mid Lab Task</title>
	</head>
	<body>
		<center>
		<fieldset>
		
			<form>
				<h1> Welcome to Registeration.</h1>
				<table>
				
					<tr>
						<td>Full Name:</td>
						<td><input type="text" value="<?php echo $fullname?>" name="fullname"></td>
					</tr>
					<tr>
						<td>User Name:</td>
						<td><input type="text" value="<?php echo $username?>" name="username"></td>
					</tr>
					<tr>					
						<td>Password:</td>
						<td><input type="text" value="<?php echo $password?>" name="password"></td>
					</tr>
					<tr>					
						<td>Confirm Password:</td>
						<td><input type="text" value="<?php echo $confirmpassword?>" name="confirmpassword"></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female   <?php echo " ".$err_gender; ?>
						</td>
					</tr>	
					<tr>	
						<td>E-mail Address:</td>
						<td><input type="text" value="<?php echo $email?>" name="email"></td>					
					</tr>
					<tr>
						<td>Contact No:</td>
						<td><input type="text" value="<?php echo $contact?>" name="contact"></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" align="rigth">
							<input type="submit" name="ok" value="Ok">
						</td>
						
					</tr>
					
					<tr>
						<td>City:</td>
						<td>
							<select name="city" >
								<?php
									$city = array("Dhaka","Khulna","Barishal","Rongpur");
									for ($i = 0; $i < 3; $i++) {
										if($i == 0)
										{

											echo "<option value='$city[$i]' disabled selected>$city[$i]</option>";
										}
										else
										{
											echo "<option value='$city[$i]'>$city[$i]</option>";
										}
									}
								?>						
							</select>
						</td>
					</tr>	
				</table>
			
			</form>
			
		</fieldset>
		</center>
	</body>
</html>