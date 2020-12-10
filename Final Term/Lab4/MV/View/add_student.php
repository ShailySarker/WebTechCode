<?php 
	include 'admin_header.php';
	require_once "../Model/database_connection.php";
	require_once "../Controller/student_everything_validation.php";
	require_once "../Controller/department_everything_validation.php";

	$department = getAllDepartment();

?>

<!--add student starts -->
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
		
		<form action="" onsubmit="return studentValidation()" method="POST">
		<table>
			<tr>
				<td><strong> Name:</strong></td>
				<td><input type="text" name="sname" id="sname" > <span id="err_name"></span><?php echo $err_name; ?></td>
			</tr>
			<tr>
				<td><strong>Department:</strong></td>
				<td>
					<select id="department" name="department">
						<option selected value="-1">Choose</option>
							<?php
								foreach ($department as $singleDepartment) {
								echo "<option value='" . $singleDepartment['id'] . "'>" . $singleDepartment['name'] . "</option>";
								}
							?>
					</select><span id="err_deptpartment"></span>
				</td>	
			</tr>
		
			<tr>
				<td><strong>DOB:</strong></td>
				<td><input type="text" name="dob" id="dob" class="form-control"><span id="err_dob"></span><?php echo $err_dob; ?>
					<select class="form-control" name="year-dob" id="year-dob">
						<option value="-1" selected disabled>Year</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
					</select>
					<span id="err_dob_year"></span><?php echo $err_dob_year; ?>
					<select class="form-control" name="month-dob" id="month-dob">
						<option value="-1" selected disabled>month</option>
						<?php
							for ($i = 1; $i <= 12; $i++) {
							echo "<option value='$i'>$i</option>";}
						?>
					</select>
					<span id="err_dob_month"></span><?php echo $err_dob_month; ?>
					<select class="form-control" name="date-dob" id="date-dob">
						<option value="-1" selected disabled>date</option>
						<?php
							for ($i = 1; $i <= 31; $i++) {
							echo "<option value='$i'>$i</option>";}
						?>
					</select>
					<span id="err_dob_date"></span><?php echo $err_dob_date; ?></td>

			</tr>
			<tr>
				<td><strong>CGPA:</strong></td>
			   <td><input type="text" name="cgpa" id="cgpa" ><span id="err_cgpa"></span><?php echo $err_cgpa; ?></td>
			</tr>
			<tr>
				<td><strong>Credit:</strong></td>
				<td><input type="text" name="credit" id="credit" ><span id="err_credit"></span><?php echo $err_credit; ?></td>
			</tr>
			<tr>
				<td><input type="submit" name="add_student" value="Add Student" ><?php echo $status; ?></td>
			</tr>
		</table>
		</form>
			<script src="JS Validation/student_validation.js"></script>
	</fieldset>
</center>
</body>
</html>

<!--add student ends -->
<?php include 'admin_footer.php'; ?>