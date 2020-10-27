<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$conformpassword="";
	$err_conformpassword="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$address="";
	$err_address="";
	$street_address="";
	$err_street_address="";
	$city="";
	$err_city="";
	$state="";
	$err_state="";
	$postal_zipcode="";
	$err_postal_zipcode="";
	$gender="";
	$err_gender="";
	$info="";
	$err_info="";
	$bio="";
	$err_bio="";
	$has_error = false;
	
	if(isset($_POST["PHP form validation"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		
		if(empty($_POST["usernamename"])){
			$err_username="Username Required";
			$has_error = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters long";
			$has_error = true;
		}
		elseif(strpos($_POST["name"]," ")){
			$err_username="Space is not allowed";
			$has_error = true;
		}
		else{
			$username=htmlspecialchars($_POST["username"]);
		}
		
		
		if(empty($_POST["password"])){
			$err_password="Password Required";
			$has_error = true;
		}
		elseif(strlen($_POST["password"]) >= 8){
			$err_password="*Username must be 8 characters long";
			$has_error = true;
			
			{
				if(strpos($_POST["password"],"#"||$_POST["password"],"?")){
					$err_password="*Password must be have 1 special character";
					$has_error = true;
				}
				
				elseif(is_numeric($_POST["password"])){
					$err_password="*Password must be have 1 number ";
					$has_error = true;
							
				}
				elseif(ctype_upper($_POST["password"])){
					$err_password="*Password have to uppercase alphabet";
					$has_error = true;
							
				}
				elseif(ctype_lower($_POST["password"])){
					$err_password="*Password have to lowercase alphabet";
					$has_error = true;
							
				}
				else{$err_password="*error";
					$has_error = true;}
			}
			
		}
		else{
			$password=htmlspecialchars($_POST["password"]);
		}
		
		
		if(empty($_POST["confirmpassword"])){
			$err_conformpassword="Confirmpassword Required";
			$has_error = true;
		}
		elseif(!$_POST["confirmpassword"]=$_POST["confirmpassword"]){
			$err_conformpassword="Confirmpassword is not correct";
			$has_error = true;
			
		}
		else{
			$confirmpassword=htmlspecialchars($_POST["confirmpassword"]);
		}
		
		
		if(empty($_POST["email"])){
			$err_email="email id Required";
			$has_error = true;
		}
		elseif(!strpos($_POST["email"],"@"),strpos($_POST["email"],"@"".")){
			$err_email="email id is not found";
			$has_error = true;
				
		}
		else{
			$email=htmlspecialchars($_POST["email"]);
		}
		
		if(empty($_POST["phone"])){
			$err_phone="phone no Required";
			$has_error = true;
		}
				
		elseif(is_numeric($_POST["phone"])){
			$err_phone="*phone need numeric number ";
			$has_error = true;
							
		}
		else{
		
			if(empty($_POST["code"])&&empty($_POST["number"])){
				$err_code="*code need numeric number ";
				$err_number="*number need numeric number ";
				$has_error = true;
				
			}
			elseif(is_numeric($_POST["code"])&&is_numeric($_POST["number"])){
				$code=htmlspecialchars($_POST["code"]);
				$number=htmlspecialchars($_POST["number"]);
			}
			else{
				$err_phone="*phone need numeric number ";
			 $has_error = true;
				
			}
			
			
		}
		
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		
		
		if(!isset($_POST["info"])){
			$err_info = "Atleast provide 1 info";
			$has_error = true;
		}
		else{
			$info=$_POST["info"];
		}
		
		
		
		
		
		
		if(!$has_error){
			echo $name;
		}
	}
	
?>


<html>
	<head>
		<title>PHP form validation</title>

	</head>
	<body>
		<hr>
		<form>
			<fieldset>
				<legend><h1>Club Member Registration</h1></legend>
				<table>
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="name"> <?php echo $err_name;?></td>
						
					</tr>
					<tr>
						<td align="right">Username:</td>
						<td><input type="text" name="username"><?php echo $err_username;?></td>
					</tr>
						<tr>
						<td align="right">Password:</td>
						<td><input type="password" name="password"><?php echo $err_password;?></td>
					</tr>
					<tr>
						<td align="right">Confirm Password:</td>
						<td><input type="password" name="conformpassword><?php echo $err_conformpassword;?></td>
					</tr>
					<tr>
						<td align="right">Email:</td>
						<td><input type="text" name="email"><?php echo $err_email;?></td>
					</tr>
					<tr>
						<td align="right">Phone:<?php echo $err_phone;?></td>
						<td><input type="text" placeholder="code" name="code" size="3"><?php echo $err_code;?>-<input type="text" placeholder="Number"  name="number" size="11"><?php echo $err_number;?></td>
					</tr>
					<tr>
						<td align="right">Address:<?php echo $err_address;?></td>
						<td><input type="text" placeholder="Street Address" name="street_address"><?php echo $err_street_address;?></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" placeholder="City" name="city" size="6"><?php echo $err_city;?>-<input type="text" placeholder="State" name="state" size="8"><?php echo $err_state;?></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" placeholder="Postal/Zip Code" name="postal_zipcode"  > <?php echo $err_postal_zipcode;?></td>
					</tr>
					<tr>
						<td align="right">Birth Date:</td>
						
						<td><select>
								<option>Day</option>
								<?php
									for($i=1;$i<=31;$i++){
									echo "<option>$i</option>";}
								?>		
							</select>
							<select>
								<option>Month</option>
								<?php
									$arr = array("January","February","March","April","May","June","July","August","Septemper","October","November","December");
									foreach($arr as $a){
										echo "<option>$a</option>";}
								?>
							</select>
							<select>
								<option>Year</option>
								<?php
									for($i=1990;$i<=2020;$i++){
										echo "<option>$i</option>";}
								?>
							</select>
								
						</td>
						
						
						
					</tr>
					<tr>
						<td align="right">Gender:<?php echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender">Male
							<input type="radio" name="gender">Female
						</td>
					</tr>
					<tr>
						<td align="right">Where did you hear about us?<?php echo $err_info;?></td>
						<td>
							<input type="checkbox">A Friend or Colleadue<br>
							<input type="checkbox">Google<br>
							<input type="checkbox">Blog Post<br>
							<input type="checkbox">News Article								
							
						</td>
					</tr>
					<tr>
						<td align="right">Bio:<?php echo $err_bio;?></td>
						<td>
							<textarea name="bio" ></textarea>
						</td>
					</tr>
					<tr>
					    <td></td>
						<td colspan="2" align="left"><input type="submit" name="register" value="register"></td>
					</tr>
					
				</table>
				
		</form>
	</body>
</html>