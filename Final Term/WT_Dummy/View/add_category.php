<?php include 'admin_header.php';
require_once "../Controllers/allcategories_validation.php";


?>
<!--addcategory starts -->
<div class="center">
	<form class="form-horizontal form-material" method="POST">
		<div class="form-group">
			<h4 class="text">Name:</h4>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group text-center">

			<input type="submit" name="add-category" class="btn btn-success" value="Add Category" class="form-control">
		</div>
	</form>
</div>

<!--addcategory ends -->
<?php include 'admin_footer.php'; ?>