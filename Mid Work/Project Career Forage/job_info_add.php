<?php
	include_once "job_info_add_validation.php";
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
			<h3>Add a Job Info</h3>
			<form action="" method="post">
				<table>
					
					<tr>
						<td><strong>Job Name:</strong></td>
					</tr>
					<tr>	
						<td><input type="text" placeholder="*Enter Job Name" value="<?php echo $jobname?>" name="jobname"></td>
						<td><span style="color:red;"><?php echo $err_jobname;?></span></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td><strong>Job Details:</strong></td> 
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
					
						<td align="center"><strong>Want to Add?</strong> 
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
						<button type="submit" style="color:blue" name="submit"><strong>Add a Job Info</strong></button> </td>
						<td><button type="submit" name="back"formaction="job_info.php"><strong>Back<strong></button></td>
					</tr>
					
						
			</form>
		</fieldset>
		</body>
	</fieldset>
	</center>	
</html>
