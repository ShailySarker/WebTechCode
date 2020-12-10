<?php
	include 'admin_header.php';
	require_once "../Controller/department_everything_validation.php";
	$departments = getAllDepartment();
?>
<!--All Department starts -->

<html>
<body>
<center>
	<fieldset>
	<h1>All Department</h1>
	<table>
		<tr>
			<th>ID</th>
			<th> Name</th>
			
		</tr>
		<?php
		foreach ($departments as $department) {

			echo "<tr>";
			echo "<td>" . $department['id'] . "</td>";
			echo "<td>" . $department['name'] . "</td>";
			echo '<td><a href="edit_department.php?d_id=' . $department['id'] . '>Edit</a></td>';
			echo "<td><a href='?d_id=" . $department['id'] . "&delete=ok'>Delete</td>";
			echo "</tr>";}
		?>
	</table>
	</fieldset>
</center>
</body>
</html>

<!--All Department ends -->
<?php include 'admin_footer.php'; ?>