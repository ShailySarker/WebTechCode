<?php
	$fullname = "";
	$err_fullname = "";
	$username = "";
	$err_username = "";
	$password = "";
	$err_password = "";
	$confirmpassword = "";
	$err_confirmpassword = "";
	$email = "";
	$err_email = "";
	$contact = "";
	$err_contact="";
	$street_address = "";
	$city = "";
	$state ="";
	$postal_zipcode ="";
	$err_address ="";
	$birth_day ="";
	$birth_month ="";
	$birth_year ="";
	$err_birth_date ="";
	$gender ="";
	$err_gender ="";
	
	$fillAll=true;
	
	if(isset($_POST["register"]))
	{
		// name validation
		if(empty($_POST["fullname"]))
		{
			$err_fullname = "*Required fullname";
			$fillAll=false;
		}
		else{ $fullname = htmlspecialchars($_POST["fullname"]);}
		
		// username validation
		if(empty($_POST["username"]))
		{
			$err_username = "*required user name";
			$fillAll=false;
		}
		else if(strlen($_POST["username"]) < 6)
		{
			$err_username = "*at least 6 char required";
			$fillAll=false;
		}
		else if(strpos($_POST["username"]," "))
		{
			$err_username = "*no space is allowed";
			$fillAll=false;
		}
		else{ $username = htmlspecialchars($_POST["username"]);}
		
		// password validation
		
		if(!empty($_POST["password"]))
		{
			if(strlen($_POST["password"]) >= 8)
			{
				if(!(strtolower($_POST["password"]) == $_POST["password"]) && (!(strtoupper($_POST["password"]) == $_POST["password"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$pass =htmlspecialchars($_POST["password"]);
					for($i = 0; $i < strlen($pass); $i++)
					{
						for($j = 0; $j <10; $j++)
						{
							if($pass[$i]== $num_arr[$j])
							{
								//echo "yo<br>";
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
						else{$err_password = "*atleast one special character # or ? is required";$fillAll=false;}
					}
					else{$err_password = "*atleast one digit is required";$fillAll=false;}
				}
				else{$err_password = "*upper and lower case character required";$fillAll=false;}
			}
			else{$err_password = "*minimum password length is 8";$fillAll=false;}
		}
		else{$err_password = "*password required";$fillAll=false;}

		if($_POST["password"] != htmlspecialchars($_POST["confirmpassword"]))
		{
			$err_confirmpassword = "*password not matched";
			$fillAll=false;
		}
		
		// email validation
		
		if(empty($_POST["email"]))
		{
			$err_email = "*required email";
			$fillAll=false;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				//echo $i ."<br>";
				//echo $pos ."<br>";
				if($str[$i] == "."){$flag = true;break;}
			}
			if($flag == true){$email = htmlspecialchars($_POST["email"]);}
			else{$err_email = "*invalid email pattern";$fillAll=false;}
		}
		
	
		if(empty($_POST["contact"]))
		{
			$err_contact = "*required code and number";
			$fillAll=false;
		}
		else if(!is_numeric($_POST["contact"]))
		{
			$err_contact = "*required numeric charecter";
			$fillAll=false;
		}
		else{ $contact = htmlspecialchars($_POST["contact"]);}
		
		
		
		// gender validate
		
		if(isset($_POST["gender"]))
		{
			$gender = $_POST["gender"];
		}
		else{$err_gender = "*gender required";
		
		$fillAll=false;}
		
		///address validation
		
		
		//for street_address
		if(empty($_POST["street_address"]))
		{
			$err_address = "*required street_address, city state and postal_zipcode";
			$fillAll=false;
		}
		else{
			$street_address = htmlspecialchars($_POST["street_address"]);}
		
		//for city
		if(empty($_POST["city"]))
		{
			$err_address = "*required street_address, city state and zip code";
			$fillAll=false;
		}
		else{
			$city = htmlspecialchars($_POST["city"]);}
		
		//for state
		if(empty($_POST["state"]))
		{
			$err_address = "* Required street_address, city state and postal_zipcodecode";
			$fillAll=false;
		}
		else{
			$state = htmlspecialchars($_POST["state"]);}
		
		//for postal_zipcode
		if(empty($_POST["postal_zipcode"]))
		{
			$err_address = "* Required street_address, city state and postal_zipcode code";
			$fillAll=false;
		}
		else{
			$postal_zipcode= htmlspecialchars($_POST["postal_zipcode"]);}
		
		
		
		if($fillAll==true)
		{
			$users = simplexml_load_file("moderators.xml");
			
			$user = $users->addChild("user");
			$user->addChild("fullname",$fullname);
			$user->addChild("password",$password);
			$user->addChild("username",$username);
			$user->addChild("gender",$gender);
			$user->addChild("email",$email);
			$user->addChild("contact",$contact);
		
			
			//echo "<pre>";
			//print_r($users);
			//echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("moderators.xml","w");
			fwrite($file,$xml->saveXML());
			echo "<h1>Register successfully</h1>";
		}
		else{
			echo "<h1>Registation not successful</h1>";}
	}
	
?>	