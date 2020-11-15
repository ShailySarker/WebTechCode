<?php
	
	include_once "all_validation/registration_moderator_validation.php";
?>

<html>
	<center>
	<head>
		<h1><span style="color:blue">Welcome new Morderater....!!!</h1><br></span>
		<h3><span style="color:blue">Please fill up the registration form -</h3></span>
	</head>
	<body>
		<center>
		<fieldset>
		* Fields are required
			<form action="" method="post">
				<table>
				
					<tr>
						<td align="right"><strong>Full Name:</strong></td>
						<td><input type="text" placeholder="* Write your fullname" value="<?php echo $fullname?>" name="fullname"></td>
						<td><span style="color:red;"><?php echo $err_fullname;?></span>
					</tr>
					<tr>
						<td align="right"><strong>User Name:</strong></td>
						<td><input type="text" placeholder="* Write your user name" value="<?php echo $username?>" name="username"></td>
						<td><span style="color:red;"><?php echo $err_username;?></span>
					</tr>
					<tr>					
						<td align="right"><strong>Password:</strong></td>
						<td><input type="password"  placeholder="* Write your password" value="<?php echo $password?>" name="password"></td>
						<td><span style="color:red;"><?php echo $err_password;;?></span>
					</tr>
					<tr>					
						<td align="right"><strong>Confirm Password:</strong></td>
						<td><input type="password"  placeholder="* Write your conform password" value="<?php echo $confirmpassword?>"name="confirmpassword"></td>
						<td><span style="color:red;"><?php echo $err_confirmpassword;;?></span>
					</tr>
					<tr>
						<td align="right"><strong>Gender:</strong></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female   
						</td>
						<td><span style="color:red;"><?php echo $err_gender;?></span>
					</tr>

					<tr>
						<td align="right"><strong>Birth Date:</strong></td>
						
						<td><select>
								<option disabled selected>Day</option>
								<?php
									for($i=1;$i<=31;$i++){
									echo "<option>$i</option>";}
								?>		
							</select>
							<select>
								<option disabled selected>Month</option>
								<?php
									$arr = array("January","February","March","April","May","June","July","August","Septemper","October","November","December");
									foreach($arr as $a){
										echo "<option>$a</option>";}
								?>
							</select>
							<select>
								<option disabled selected>Year</option>
								<?php
									for($i=1990;$i<=2020;$i++){
										echo "<option>$i</option>";}
								?>
							</select>
								
						</td>
						<td><span style="color:red;"><?php echo $err_birthdate;?></span></td>

					</tr>

					
					<tr>	
						<td align="right"><strong>E-mail Address:</strong></td>
						<td><input type="text"  placeholder="* Write your email address" value="<?php echo $email?>" name="email"></td>
						<td><span style="color:red;"><?php echo $err_email;?></span>						
					</tr>
					<tr>
						<td align="right"><strong>Contact No:</strong></td>
						<td><input type="text"  placeholder="* Enter your contact no" value="<?php echo $contact?>" name="contact"></td>
						<td><span style="color:red;"><?php echo $err_contact;?></span>
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
					<tr>
						<td align="right"><strong>Bio:</strong></td>
						<td>
							<textarea name="bio" ></textarea>
						</td>
						<td><span style="color:red;"><?php echo $err_bio;?></span></td>
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
					
					<tr>
						<td></td>
						<td colspan="2" align="l">
							<input type="submit" name="register" value="register">
						</td>
						
					</tr>					
				</table>
			</form>
		</fieldset>
		</center>
	</body>
	</center>
</html>
