<?php 
	include 'admin_header.php';
	require_once "../Model/database_connection.php";
	require_once "../Controller/department_everything_validation.php";
?>

<!--add department starts -->
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
					<td><strong>Name:</strong></td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td><strong>ID:</strong></td>
					<td><input type="text" name="id"></td>
				</tr>

				<tr>

				<td><input type="submit" name="add_department" value="Add Department" class="form-control"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</center>
</body>
</html>

<!--add department ends -->
<?php include 'admin_footer.php'; ?>