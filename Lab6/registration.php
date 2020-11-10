<?php 
    $fullname="";
    $err_fullname="";
    $username="";
    $err_username="";
    $password="";
    $err_password="";
    $confirmpassword="";
    $err_confirmpassword="";
	$gender="";
    $err_gender="";
    $email="";
    $err_email="";
    $contact="";
    $err_contact="";
	$city="";
	$err_city="";

    $has_err=false;
    if(isset($_POST["register"])){
       

	   ///NAME VALIDATION
        if(empty($_POST["fullname"])){
            $err_name="Full Name Required";
            $has_err=true;
        }
        else{
            $name=htmlspecialchars($_POST["fullname"]);
        }
		
		
		
        ///USER NAME VALIDATION
        if(empty($_POST["username"])){
            $err_username="Username Required";
            $has_err=true;
        }
        elseif((strlen($_POST["username"])<6)){
            $err_uname="Username must be 6 char";
            $has_err=true;
        }
        elseif(strpos($_POST["username"]," ")){
            $err_uname="No space allow in username!";
            $has_err=true;
        }
        else{
            $uname=htmlspecialchars($_POST["username"]);
        }
		
		
        ///PASSWORD VALIDATION
        if(empty($_POST["password"])){
            $err_pass="Password Required";
            $has_err=true;
        }
        elseif(strlen($_POST["password"])<8){
            $err_pass="Password must be 8 char";
            $has_err=true;
        }
        elseif(!strpos($_POST["password"],"#") || !strpos($_POST["pass"],"?")){
            $err_pass="Password must be contained '#' or '?'.";
            $has_err=true;
        }
        elseif(!strpos($_POST["password"],"1")){
            $err_pass="Password must contain 1 numeric";
            $has_err=true;
        }
        elseif(strtolower($_POST["password"])==$_POST["password"] || strtolower($_POST["password"])==$_POST["password"]){
            $err_pass="Password must contain Uppercase and Lowercase letter.";
            $has_err=true;
        }
        else{
            $pass=htmlspecialchars($_POST["password"]);
        }
		
		
        ///CONFIRMPASSWORD VALIDATION
        if(empty($_POST["confirmpassword"])){
            $err_confirmpassword="ConfirmPassword Required";
            $has_err=true;
        }
        elseif(!strcmp($_POST["confirmpassword"],strtoupper($_POST["password"]))){
            $err_confirmpassword="Password and Confirm Password must be same.";
            $has_err=true;
        }
		
		
        ///GENDER VALIDATION
		
        if(!isset($_POST["gender"])){
			$err_gender="Gender Required.";
			$has_err=true;
        }
        else{
            $gender=htmlspecialchars($_POST["gender"]);
        }
		
		
		///EMAIL ADDREESS VALIDATION
        if(empty($_POST["email"])){
            $err_email="Email Required";
            $has_err=true;
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],"."))
		{
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                $email=htmlspecialchars($_POST["email"]);
            }
            else{
                $err_email="'@' Must be before '.'.";
                $has_err=true;
            }
        }
        else{
            $err_email="Email must contain '@' and '.'.";
            $has_err=true;
        }
		
		
        ///CONTACT NO VALIDATION
        if(empty($_POST["contact"]))
		{
			$err_contact = "Contact no. required";
		}
		else if(!is_numeric($_POST["contact"]))
		{
			$err_contact = "Numeric charecter required";
		}
		else{ $number = htmlspecialchars($_POST["contact"]);
		}
		
		
		///CITY VALIDATION
		if(isset($_POST["city"])){
            $city=htmlspecialchars($_POST["city"]);
        }
        else{
            $err_city="Please Select city";
            $has_err=true;
        }
		
		
		
	}

?>




<html>
	<head>
		<title>Mid Lab Task</title>
	</head>
	<body>
		<center>
		<fieldset>
		
			<form>
				<h1> Welcome to Registeration.</h1>
				<table>
				
					<tr>
						<td>Full Name:</td>
						<td><input type="text" value="<?php echo $fullname?>" name="fullname"></td>
					</tr>
					<tr>
						<td>User Name:</td>
						<td><input type="text" value="<?php echo $username?>" name="username"></td>
					</tr>
					<tr>					
						<td>Password:</td>
						<td><input type="text" value="<?php echo $password?>" name="password"></td>
					</tr>
					<tr>					
						<td>Confirm Password:</td>
						<td><input type="text" value="<?php echo $confirmpassword?>" name="confirmpassword"></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female   <?php echo " ".$err_gender; ?>
						</td>
					</tr>	
					<tr>	
						<td>E-mail Address:</td>
						<td><input type="text" value="<?php echo $email?>" name="email"></td>					
					</tr>
					<tr>
						<td>Contact No:</td>
						<td><input type="text" value="<?php echo $contact?>" name="contact"></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" align="rigth">
							<input type="submit" name="ok" value="Ok">
						</td>
						
					</tr>
					
					<tr>
						<td>City:</td>
						<td>
							<select name="city" >
								<?php
									$city = array("Dhaka","Khulna","Barishal","Rongpur");
									for ($i = 0; $i < 3; $i++) {
										if($i == 0)
										{

											echo "<option value='$city[$i]' disabled selected>$city[$i]</option>";
										}
										else
										{
											echo "<option value='$city[$i]'>$city[$i]</option>";
										}
									}
								?>						
							</select>
						</td>
					</tr>	
				</table>
			
			</form>
			
		</fieldset>
		</center>
	</body>
</html>