<?php 
	include 'admin_header.php';
	require_once "../Model/database_connection.php";
	require_once "../Controller/student_everything_validation.php";
	require_once "../Controller/department_everything_validation.php";

	$departments = getAllDepartment()

?>

<!--edit student starts -->

<html>
<body>
<center>
	<fieldset>
		<style>
			table,th,td{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;}
		</style>
		<form action="" method="POST">
			<table>
				<tr>
					<td><strong> Name:</strong></td>
					<td><input type="text" name="sname" value="<?php echo $studentData[0]['name'] ?>"></td>
				</tr>
				<tr>
					<td><strong>Department:</strong></td>
					<td>
						<select name="department">
							
							<?php foreach ($departments as $singledepartment) {
							echo "<option value='" . $singledepartment['id'] . "'>" . $singledepartment['name'] . "</option>";}
							?>
						</select>
				</tr>
				<tr>
					<td><strong>CGPA:</strong></td>
					<td><input type="text" name="cgpa" value="<?php echo $studentData[0]['cgpa'] ?>"></td>
				</tr>
				<tr>
					<td><strong>Credit:</strong></td>
					<td><input type="text" name="credit" value="<?php echo $studentData[0]['credit'] ?>"></td>
				</tr>
				<tr>
					<td><strong>DOB:</strong></td>
					<td><input type="text" name="dob" value="<?php echo $studentData[0]['dob'] ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="update_student"  value="Edit Student"><td>
				</tr>
			</table>
		</form>
	</fieldset>
</center>
</body>
</html>

<!--edit student ends -->
<?php include 'admin_footer.php'; ?>