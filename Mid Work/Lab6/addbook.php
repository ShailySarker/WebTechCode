<?php
	include_once "php_validation/addbook_validation.php";
?>


<html>
	<fieldset>
	<fieldset>
	<head>
	<center>
		<h1>Book Store</h1>
	</center>	
	</head>
	</fieldset>
	<fieldset>
	<body>
	<center>
		<h1> Add book</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td>
					Book Name:<br>
						<input type="text" value="<?php echo $bname?>" name="bname">
					</td>
					<td><span style="color:red;"><?php echo $err_bname;?></span>
				</tr>
				<tr>
					<td>Category:</td>
				</tr>
				<tr>						
					<td>
						<select>
							<option>Architecture</option>
							<option>Sports</option>
							<option>Astrology</option>
							<option>Busniess</option>						
						</select>
					</td>
					<td><span style="color:red;"><?php echo $err_category;?></span>
				</tr>
				<tr>
					<td>Description:</td>
				</tr>
				<tr>				
					<td>
						<textarea name="dec" ></textarea>
					</td>
					<td><span style="color:red;"><?php echo $err_dec;?></span>
				</tr>			
				
				<tr>
					<td>
					Publisher:<br>
						<input type="text" value="<?php echo $publisher?>" name="publisher">
					</td>
					<td><span style="color:red;"><?php echo $err_publisher;?></span>
				</tr>

				<tr>
					<td>
					Edition:<br>
						<input type="text" value="<?php echo $edition?>" name="edition">
					</td>
					<td><span style="color:red;"><?php echo $err_edition;?></span></td>					
				</tr>
				<tr>
					<td>
					ISBN:<br>
						<input type="text" value="<?php echo $isbn?>" name="isbn">
					</td>
					<td><span style="color:red;"><?php echo $err_isbn;?></span>					
				</tr>
				<tr>
					<td>
					PAGES:<br>
						<input type="text" value="<?php echo $pages?>" name="pages">
					</td>
					<td><span style="color:red;"><?php echo $err_pages;?></span>		
				</tr>
				<tr>
					<td>
					PRICE:<br>
						<input type="text" value="<?php echo $price?>" name="price">
					</td>
					<td><span style="color:red;"><?php echo $err_price;?></span>		
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="add" value="add"></td>
				</tr>					
			</table>
		</form>
	</center>	
	</body>
	</fieldset>
	</fieldset>
</html>
