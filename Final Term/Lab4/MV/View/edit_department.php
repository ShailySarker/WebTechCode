<?php
	include 'admin_header.php';
	require_once "../Model/database_connection.php";
	require_once "../Controller/department_everything_validation.php";
?>

<!--edit department starts -->
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
					<td><input type="text" name="dname" value="<?php echo $department[0]['name']; ?>"></td>
				</tr>
				<tr>
					<td><strong>ID:</strong></td>
					<td><input type="text" name="id" value="<?php echo $department[0]['id']; ?>"></td>
				</tr>

				<tr>

				<td><input type="submit" name="edit_department" value="Edit Department">
				</tr>
			</table>	
		</form>
	</fieldset>
</center>
</body>
</html>


<!--edit department ends -->

<?php include 'admin_footer.php'; ?>