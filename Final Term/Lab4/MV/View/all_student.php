<?php
include 'admin_header.php';

require_once "../Controller/student_everything_validation.php";
$students = getAllStudent();


?>
<!--All Student starts -->
<html>
<body>
<center>
	<fieldset>
	<h1>All Student</h1>
	<table>
		<tr>
			<th>ID</th>
			<th> Name</th>
			<th>DOB</th>
			<th>Department ID </th>
			<th> Credit</th>
			<th> CGPA</th>
			<th></th>
			<th></th>
		</tr>
		<?php foreach ($students as $student) {
			echo "<tr>";
			echo "<td>" . $student['id'] . "</td>";
			echo "<td>" . $student['name'] . "</td>";
			echo "<td>" . $student['department'] . "</td>";
			echo "<td>" . $student['dob'] . "</td>";
			echo "<td>" . $student['credit'] . "</td>";
			echo "<td>" . $student['cgpa'] . "</td>";
			echo "<td><a href='edit_student.php?s_id=" . $student['id'] . "'>Edit</a></td>";
			echo "<td><a href='?s_id=" . $student['id'] . "&delete=ok'>Delete</td>";
			echo "</tr>";}
		?>
	</table>
	</fieldset>
</center>
</body>
</html>	

<!--All Student ends -->


<?php include 'admin_footer.php'; ?>