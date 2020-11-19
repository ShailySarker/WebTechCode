<?php
	include_once "internship_info_add_validation.php";
?> 

	
<html>
	<center>
	<fieldset style="background-color:powderblue;height:80%;width:40%">
	
		<head>
			<fieldset>
				<span style="color: blue"><h1>Career Forage</h1></span>
			</fieldset>
		</head>
		<body>
		<fieldset>
			<h3>Add an Internship Info</h3>
			<form action="" method="post">
				<table>
					
					<tr>
						<td><strong>Internship Name:</strong></td>
					</tr>
					<tr>	
						<td><input type="text" placeholder="*Enter Internship Name" value="<?php echo $internshipname?>" name="internshipname"></td>
						<td><span style="color:red;"><?php echo $err_internshipname;?></span></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td><strong>Internship Details:</strong></td> 
					</tr>
					<tr>
						<td>
							<textarea name="bio" rows="10" cols="60"></textarea>
						</td>
						<td><span style="color:red;"><?php echo $err_bio;?></span></td>
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
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
					
						<td align="center"><strong>Want to add?</strong> 
						<span style="color:red;"><?php echo $err_add;?></span></td>
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
						<button type="submit" style="color:blue" name="submit"><strong>Add a Internship Info</strong></button> </td>
						<td><button type="submit" name="back"formaction="internship_info.php"><strong>Back<strong></button></td>
					</tr>
					
						
			</form>
		</fieldset>
		</body>
	</fieldset>
	</center>	
</html>
