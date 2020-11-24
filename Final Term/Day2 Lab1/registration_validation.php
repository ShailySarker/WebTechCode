<?php
	
	$username = "";
	$err_username = "";
	$password = "";
	$err_password = "";
	$type="";
	$err_type="";
	$fillAll=true;
	$dbservername="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="Day1";
	
	if(isset($_POST["register"]))
	{
	
		// username validation
		if(empty($_POST["username"]))
		{
			$err_username = "*Required username";
			$fillAll=false;
		}
		else if(strlen($_POST["username"]) < 6)
		{
			$err_username = "*At least 6 char required";
			$fillAll=false;
		}
		else if(strpos($_POST["username"]," "))
		{
			$err_username = "*No space is allowed";
			$fillAll=false;
		}
		else{ $user_name = htmlspecialchars($_POST["username"]);}
		
		
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
						else{
							$err_password = "*atleast one special character # or ? is required";
							$fillAll=false;
							}
					}
					else{
						$err_password = "*atleast one digit is required";
						$fillAll=false;
						}
				}
				else{
					$err_password = "*upper and lower case character required";
					$fillAll=false;
					}
			}
			else{
				$err_password = "*minimum password length is 8";
				$fillAll=false;
				}
		}
		else{
			$err_password = "*Password required";
			$fillAll=false;
			}

		
		
		// type validation
		if(empty($_POST["type"]))
		{
			$err_type = "*Required type";
			$fillAll=false;
		}
		
		
		else{ $type = htmlspecialchars($_POST["type"]);}
		$encodepass=md5($password);
		$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
		$q = "INSERT INTO Users (id,username,password,type) VALUES ('','$username','$encoderpassword', '$type')";
		
		if($fillAll==true)
		{
			$result =mysqli_query($conn, $q);
			
				echo "<h1>Registation is Successfully</h1>";
			
		}
		else
		{
			echo "<h1>Registation not successful</h1>";
		}
	}
	
?>