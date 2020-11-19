<?php
	include_once"undergrade_add_validation.php";
?>
<html>
	<center>
	<fieldset style="background-color:powderblue;height:90%;width:55%">
	
		<head>
			<fieldset>
				<span style="color: blue"><h1>Career Forage</h1></span>
			</fieldset>
		</head>
		<body>
		<fieldset>
			<h3>Add an Account</h3>
			<form action="" method="post">
				<table>
					
					<tr>
						<td><strong>User Name:</strong></td>
					</tr>
					<tr>	
						<td><input type="text" style="height:30px;width:220px" placeholder="*Enter User Name" value="<?php echo $username?>"name="username"></td>
						<td><span style="color:red;"><?php echo $err_username;?></span></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td><strong>Email Address:</strong></td> 
					</tr>
					<tr>
						<td><input type="text" style="height:30px;width:220px" placeholder="*Enter Email Address" value="<?php echo $email?>"name="email"></td>
						<td><span style="color:red;"><?php echo $err_email;?></span>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td><strong>Contact no:</strong></td>  
					</tr>
					<tr>	
						<td><input type="text" style="height:30px;width:220px" placeholder="*Enter Contact no"value="<?php echo $contact?>"name="contact" ></td>
						<td><span style="color:red;"><?php echo $err_contact;;?></span>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td><strong>Address:</strong></td>
					</tr>
					<tr>								
						<td><input type="text" style="height:30px;width:220px" placeholder="Street Address" value="<?php echo $street_address?>" name="street_address"></td>
						<td><span style="color:red;"><?php echo $err_address;?></span></td>
					</tr>
					<tr>
						
						<td><input type="text" placeholder="City" style="height:30px;width:100px" value="<?php echo $city?>" name="city" > - <input type="text" style="height:30px;width:107px" placeholder="State" value="<?php echo $state?>" name="state"></td>
						<td><span style="color:red;"><?php echo $err_address;?></span></td>
					</tr>
					<tr>
						
						<td><input type="text" style="height:30px;width:220px" placeholder="Postal/Zip Code" value="<?php echo $postal_zipcode?>" name="postal_zipcode"  > </td>
						<td><span style="color:red;"><?php echo $err_address;?></span></td>
					</tr>
					
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					
						<td align="center"><strong>Want to add?</strong> <td>
						<td><span style="color:red;"><?php echo $err_add;?></span></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td align="center"><input type="radio" name="add">YES
							<input type="radio" name="add">No</td>
					
					
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td>
						<button type="submit" style="color:blue" name="submit" ><strong>Create Account</strong></button> </td>
						<td><button type="submit"  name="back" formaction="undergrade_student_user.php"><strong>Back<strong></button></td>
					</tr>
					
						
			</form>
		</fieldset>
		</body>
	</fieldset>
	</center>	
</html>
