<?php
	include_once "allvalidation/registration_validation.php";
?>
<html>
	<head>
		<title>Mid Lab Task</title>
	</head>
	<body>
		<center>
		<fieldset>
		
			<form action="" method="post">
				<h1> Welcome to Registeration.</h1>
				<table>
				
					<tr>
						<td>Full Name:</td>
						<td><input type="text" value="<?php echo $fullname?>" name="fullname"></td>
						<td><span style="color:red;"><?php echo $err_fullname;?></span>
					</tr>
					<tr>
						<td>User Name:</td>
						<td><input type="text" value="<?php echo $username?>" name="username"></td>
						<td><span style="color:red;"><?php echo $err_username;?></span>
					</tr>
					<tr>					
						<td>Password:</td>
						<td><input type="text" value="<?php echo $password?>" name="password"></td>
						<td><span style="color:red;"><?php echo $err_password;;?></span>
					</tr>
					<tr>					
						<td>Confirm Password:</td>
						<td><input type="text" value="<?php echo $confirmpassword?>"name="confirmpassword"></td>
						<td><span style="color:red;"><?php echo $err_confirmpassword;;?></span>
					</tr>
					<tr>
						<td>Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female   
						</td>
						<td><span style="color:red;"><?php echo $err_gender;?></span>
					</tr>	
					<tr>	
						<td>E-mail Address:</td>
						<td><input type="text" value="<?php echo $email?>" name="email"></td>
						<td><span style="color:red;"><?php echo $err_email;?></span>						
					</tr>
					<tr>
						<td>Contact No:</td>
						<td><input type="text" value="<?php echo $contact?>" name="contact"></td>
						<td><span style="color:red;"><?php echo $err_contact;?></span>
					</tr>
				
					<tr>
						<td>City:</td>
						<td>
							<select name="city" >
								<?php
									$city = array("Dhaka","Khulna","Barishal","Rangpur");
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
						<td><span style="color:red;"><?php echo $err_city;?></span>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" align="center">
							<input type="submit" name="Ok" value="Ok">
						</td>
						
					</tr>					
				</table>
			
			</form>
			
		</fieldset>
		</center>
	</body>
</html>