<?php
	
	include_once "moderator_registration_validation.php";
?>

<html>
	<head>
		<title>Registation</title>
	</head>
	<center>
	<head>
		
	</head>
	<body>
		<center>
		<fieldset style="background-color:powderblue;height:75%;width:50%">
		<h1><span style="color:blue">Welcome new Morderater....!!!</h1></span>
		<h3 style="color:blue">Please fill up the registration form-</h3>
		
		* Fields are required
			<form action="" method="post">
			
				
				<table>
				
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr>
						<td align="right"><strong>Full Name:</strong></td>
						<td><input type="text" name="fullname" placeholder="Write your fullname" value="<?php echo $fullname?>"></td>
						<td><span style="color:red;"><?php echo $err_fullname;?></span></td>
					</tr>
					<tr>
						<td align="right"><strong>Username:</strong></td>
						<td><input type="text" name="username" placeholder="Enter you username"value="<?php echo $username?>" ></td>
						<td><span style="color:red;"><?php echo $err_username;?></span></td>
					</tr>
					<tr>
						<td align="right"><strong>Password:</strong></td>
						<td><input type="password" name="password" placeholder="Enter your password" value="<?php echo $password; ?>"></td>
						<td><span style="color:red;"><?php echo $err_username;?></span></td>
					</tr>
					<tr>
						<td align="right"><strong>Confirm Password:</strong></td>
						<td><input type="password" name="confirmpassword" placeholder="Enter your confirmpassword" value="<?php echo $password; ?>"></td>
						<td><span style="color:red;"><?php echo $err_confirmpassword;;?></span></td>
					</tr>
					<tr>
						<td align="right"><strong>Email Address:</strong></td>
						<td><input type="text" name="email" placeholder="Write you email address"value="<?php echo $email; ?>"></td>
						<td><span style="color:red;"><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td align="right"><strong>Contact No:</td>
						<td><input type="text" placeholder="Enter your contact no"  name="contact" value="<?php echo $contact ?>"></td>
						<td><span style="color:red;"><?php echo $err_contact;?></span></td>
					</tr>
					
					
					<tr>
						<td align="right"><strong>Gender:</strong></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male 
							<input type="radio" name="gender" value="Female"> Female   
						</td>
						<td><span style="color:red;"><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
						<td align="right"><strong>Address:</strong></td>
						<td><input type="text" placeholder="Street Address" value="<?php echo $street_address?>" name="street_address"></td>
						<td><span style="color:red;"><?php echo $err_address;?></span></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" placeholder="City" value="<?php echo $city?>" name="city" size="6"> -
							<input type="text" placeholder="State" value="<?php echo $state?>" name="state" size="7.5"></td>
						<td><span style="color:red;"><?php echo $err_address;?></span></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" placeholder="Postal/Zip Code" value="<?php echo $postal_zipcode?>" name="postal_zipcode"  size="20"> </td>
						<td><span style="color:red;"><?php echo $err_address;?></span></td>
					</tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					<tr> </tr>
					
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
	
</html>
