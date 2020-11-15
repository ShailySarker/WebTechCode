<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$confirmpassword="";
	$err_confirmpassword="";
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
	$birthdate="";
	$err_birthdate="";
	$bday="";
	$err_bday="";
	$bmonth="";
	$err_bmonth="";
	$byear="";
	$err_byear="";
	$gender="";
	$err_gender="";
	$info="";
	$err_info="";
	$bio="";
	$err_bio="";
	$has_error = false;
	
	if(isset($_POST["register"])){
		
		
		///name validation
		if(empty($_POST["name"])){
			$err_name=" * Name Required";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		
		
		///username validation
		if(empty($_POST["usernamename"])){
			$err_username="* Username Required";
			$has_error = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters long";
			$has_error = true;
		}
		elseif(strpos($_POST["username"]," ")){
			$err_username="* Space is not allowed";
			$has_error = true;
		}
		else{
			$username=htmlspecialchars($_POST["username"]);
		}
		
		
		/// password validation
		if(!empty($_POST["password"]))
		{
			if(strlen($_POST["password"]) >= 8)
			{
				if(!(strtolower($_POST["password"]) == $_POST["password"]) && (!(strtoupper($_POST["password"]) == $_POST["password"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$password =htmlspecialchars($_POST["password"]);
					for($i = 0; $i < strlen($pass); $i++)
					{
						for($j = 0; $j <10; $j++)
						{
							if($password[$i]== $num_arr[$j])
							{
								$hasNumber = true;
								break;
							}
						}
					}
					if($hasNumber == true)
					{
						if(strpos($_POST["password"], "#") || strpos($_POST["password"], "?"))
						{
							$password = htmlspecialchars($_POST["password"]);
						}
						else{
							$err_password = "* At least one special character # or ? is required";
							$has_error = true;}
					}
					else{
						$err_password = "* At least one digit is required";
						$has_error = true;}
				}
				else{
					$err_password = "* Upper and lower case character required";
					$has_error = true;}
			}
			else{
				$err_password = "* Minimum password length must be 8";
				$has_error = true;}
		}
		else{
			$err_password = "* Password required";
			$has_error = true;}
		
		
		
		///confirmpassword validation
		if($_POST["password"] != htmlspecialchars($_POST["confirmpassword"]))
		{
			$err_confirmpassword = " * Confirm Password is not matched with password";
				$has_error = true;
		}
		else{
			$confirmpassword=htmlspecialchars($_POST["confirmpassword"]);
		}
		
		
		///email validation
		if(empty($_POST["email"]))
		{
			$err_email = "* Email Required";
			$has_error = true;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				if($str[$i] == "."){
					$flag = true;break;}
			}
			if($flag == true){
				$email = htmlspecialchars($_POST["email"]);}
			else{
				$err_email = "*invalid email pattern";
				$has_error = true;}
		}
		
		///phone validation
		
		//for code
		if(empty($_POST["code"]))
		{
			$err_phone = "*Required code and number";
			$has_error = true;
		}
		else if(!is_numeric($_POST["code"]))
		{
			$err_phone = "*Required numeric charecter";
			$has_error = true;
		}
		else{ 
			$code = htmlspecialchars($_POST["code"]);}
			
		//for number
		if(empty($_POST["number"]))
		{
			$err_phone = "*Required code and number";
			$has_error = true;
		}
		else if(!is_numeric($_POST["number"]))
		{
			$err_phone = "*Required numeric charecter";
			$has_error = true;
		}
		else{
			$number = htmlspecialchars($_POST["number"]);
		
		}
		
		
		
		///address validation
		
		
		//for street_address
		if(empty($_POST["street_address"]))
		{
			$err_address = "*required street_address, city state and postal_zipcode";
			$has_error = true;
		}
		else{
			$street_address = htmlspecialchars($_POST["street_address"]);}
		
		//for city
		if(empty($_POST["city"]))
		{
			$err_address = "*required street_address, city state and zip code";
			$has_error = true;
		}
		else{
			$city = htmlspecialchars($_POST["city"]);}
		
		//for state
		if(empty($_POST["state"]))
		{
			$err_address = "* Required street_address, city state and postal_zipcodecode";
			$has_error = true;
		}
		else{
			$state = htmlspecialchars($_POST["state"]);}
		
		//for postal_zipcode
		if(empty($_POST["postal_zipcode"]))
		{
			$err_address = "* Required street_address, city state and postal_zipcode code";
			$has_error = true;
		}
		else{
			$postal_zipcode= htmlspecialchars($_POST["postal_zipcode"]);}
		
		
		
		
		///Birth Date
		
		//day
		if(isset($_POST["bday"]))
		{
			$birthdate = $_POST["bday"];
			
		}
		else{
			$err_birthdate = "* Here day, month & year required";
			$has_error = true;}
		
		//month
		if(isset($_POST["bmonth"]))
		{
			$bmonth = $_POST["bmonth"];
			
		}
		else{
			$err_birthdate = "* Here day, month & year required";
			$has_error = true;}
		
		//year
		if(isset($_POST["byear"]))
		{
			$byear = $_POST["byear"];
			
		}
		else{
			$err_birthdate = "* Here day, month & year required";
			$has_error = true;}
		
		
		///Gender validation
		if(!isset($_POST["gender"])){
			$err_gender="* At least select one gender ";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		
		
		/// Info validation
		if(isset($_POST["info"]))
		{
			$info = $_POST["info"];
			
			
		}
		else{
			$err_info= "* At least select 2 information";
			$has_error = true;}
		
		
		/// bio validation
		
		if(!empty($_POST["bio"]))
		{
			$bio = htmlspecialchars($_POST["bio"]);
		}
		else{
			$err_bio = "* Please fill up bio" ;
			$has_error = true;}
		
		
		
		
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
		<form action="" method="post">
			<fieldset>
				<legend><h1>Club Member Registration</h1></legend>
				<table>
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="name" value="<?php echo $name?>" </td>
						<td><span style="color:red;"><?php echo $err_name;;?></span></td>
						
					</tr>
					<tr>
						<td align="right">Username:</td>
						<td><input name="username" type="text" value="<?php echo $username?>" </td>
						<td><span style="color:red;"><?php echo $err_username;;?></span></td>
					</tr>
						<tr>
						<td align="right">Password:</td>
						<td><input type="password" name="password" value="<?php echo $password?>" </td>
						<td><span style="color:red;"><?php echo $err_password;;?></span></td>
					</tr>
					<tr>
						<td align="right">Confirm Password:</td>
						<td><input type="password" name="confirmpassword" value="<?php echo $confirmpassword?>" </td>
						<td><span style="color:red;"><?php echo $err_confirmpassword;;?></span></td>
					</tr>
					</tr>
					<tr>
						<td align="right">Email:</td>
						<td><input type="text" value="<?php echo $email?>"name="email"</td>
						<td><span style="color:red;"><?php echo $err_email;;?></span>
					</tr>
					<tr>
						<td align="right">Phone:</td>
						<td><input type="text" placeholder="code" name="code" size="3">-<input type="text" placeholder="Number"  name="number" size="11"></td>
						<td><span style="color:red;"><?php echo $err_phone;;?></span></td>
					</tr>
					<tr>
						<td align="right">Address:</td>
						<td><input type="text" placeholder="Street Address" name="street_address"></td>
						<td><span style="color:red;"><?php echo $err_address;?></span></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" placeholder="City" name="city" size="6">-<input type="text" placeholder="State" name="state" size="8"></td>
						<td><span style="color:red;"><?php echo $err_address;?></span></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" placeholder="Postal/Zip Code" name="postal_zipcode"  > </td>
						<td><span style="color:red;"><?php echo $err_address;?></span></td>
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
						<td><span style="color:red;"><?php echo $err_birthdate;?></span></td>
						
						
						
					</tr>
					<tr>
						<td align="right">Gender:</td>
						<td>
							<input type="radio" name="gender">Male
							<input type="radio" name="gender">Female
						</td>
						<td><span style="color:red;"><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
						<td align="right">Where did you hear about us?</td>
						<td>
							<input type="checkbox">A Friend or Colleadue<br>
							<input type="checkbox">Google<br>
							<input type="checkbox">Blog Post<br>
							<input type="checkbox">News Article								
							
						</td>
						<td><span style="color:red;"><?php echo $err_info;?></span></td>
					</tr>
					<tr>
						<td align="right">Bio:</td>
						<td>
							<textarea name="bio" ></textarea>
						</td>
						<td><span style="color:red;"><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
					    <td></td>
						<td colspan="2" align="left"><input type="submit" name="register" value="register"></td>
					</tr>
					
				</table>
				
		</form>
	</body>
</html>