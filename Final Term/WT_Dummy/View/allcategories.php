<?php
	include 'admin_header.php';
	require_once "../Controllers/allcategories_validation.php";

	$categories = getAllCategories();

	//SELECT  c.c_id,c.name, COUNT(p.category) FROM categories c, products p WHERE c.c_id = p.category GROUP  BY c.name;

?>


<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Product Count </th>
			<th></th>
			<th></th>

		</thead>		
<?php
		foreach ($categories as $category) {

			echo "<tbody>";
			echo "<td>" . $category['c_id'] . "</td>";
			echo "<td>" . $category['name'] . "</td>";
			echo "<td>100</td>";
			echo '<td><a href="editcategory.php?c-id='. $category['c_id'] .'"class="btn btn-success">Edit</a></td>';
			echo "<td><a href='?c-id=" . $category['c_id'] . "&delete=ok' class='btn btn-danger'>Delete</td>";
			echo "</tbody>";
		}		
?>
	</table>
</div>
<!--All Categories ends -->


<?php include 'admin_footer.php'; ?>