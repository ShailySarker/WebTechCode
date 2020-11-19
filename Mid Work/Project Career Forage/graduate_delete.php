
<?php
	include_once"graduate_delete_validation.php";
?>


<html>
	<center>
	<fieldset style="background-color:powderblue;height:55%;width:40%">
	<fieldset>
	
	<head><h1 style="color:blue"> Career Forage</h1></head>
	
	</fieldset>
	<fieldset>
	<center>
	<body>
		
		<table>
		<form action="" method="post">
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td align="center"><h2>Delete an Account</h2></td>
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
				<td>
					<strong>User Name:</strong>
						<input type="text" style="height:30px;width:220px" value="<?php echo $username?>" name="username">
				</td>
			
				<td><span style="color:red;"><?php echo $err_username;?></span>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
					
				<td align="center"><strong>Want to Delete?</strong> <td>
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
			<tr>
				<td><input type="submit" style="color:red" name="Delete" value="Delete"></td>
				<td><button type="submit"  name="back"formaction="graduate_student_user.php"><strong>Back<strong></button></td>
			</tr>
		</form>	
		</table>
	</body>
	</center>
	</fieldset>
	</fieldset>
	</center>
	
</html>
