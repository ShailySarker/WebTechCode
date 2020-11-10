<html>
	<fieldset>
	<fieldset>
	<head>
		<title></title>
	</head>
	</fieldset>
	<fieldset>
	<body>
	<center>
		<h1> Add book</h1>
		<form>
			<table>
				<tr>
					<td>
					Book Name:<br>
						<input type="text" value="<?php echo $bname?>" name="bname">
					</td>	
				</tr>
				<tr>
					     <td>Category:</td>
				</tr>
				<tr>						
					<td>
						<select>
							<option disabled selected>Architecture</option>
							<option>Sports</option>
							<option>Astrology</option>
							<option>Busniess</option>						
						</select>
					</td>
				</tr>
				<tr>
					<td>Description:<?php echo $err_dec;?></td>
					<td>
						<textarea name="dec" ></textarea>
					</td>
				</tr>			
				
				<tr>
					<td>
					Publisher:<br>
						<input type="text" value="<?php echo $publisher?>" name="publisher">
					</td>	
				</tr>

				<tr>
					<td>
					Edition:<br>
						<input type="text" value="<?php echo $edition?>" name="edition">
					</td>	
				</tr>
				<tr>
					<td>
					ISBN:<br>
						<input type="text" value="<?php echo $isbn?>" name="isbn">
					</td>	
				</tr>
				<tr>
					<td>
					PAGES:<br>
						<input type="text" value="<?php echo $pages?>" name="pages">
					</td>	
				</tr>
				<tr>
					<td>
					PRICE:<br>
						<input type="text" value="<?php echo $price?>" name="price">
					</td>	
				</tr>
				
			</table>
		</form>
	</center>	
	</body>
	</fieldset>
	</fieldset>
</html>