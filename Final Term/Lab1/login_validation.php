<?php
	session_start();
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$hasError=false;
	$dbservername="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="day1";
	
	$hasError = false;
	
	if(isset($_POST["login"])){
		
		///username validation
		if(empty($_POST["username"])){
			$err_username="*Username Required";
			$hasError =true;	
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}
		
		///password validation
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
							$hasError = true;
							}
					}
					else{
						$err_password = "*atleast one digit is required";
						$hasError = true;
						}
				}
				else{
					$err_password = "*upper and lower case character required";
					$hasError = true;
					}
			}
			else{
				$err_password = "*minimum password length is 8";
				$hasError = true;
				}
		}
		else{
			$err_password = "*Password required";
			$hasError = true;
			}

		
		$encodpassword=md5($password);
		$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
		$q = "select * from Users where username='$username' and password='$encodepassword'";
		if(!$hasError){
			$result =mysqli_query($conn, $q);
			if(mysqli_num_rows($result)>0)
			{
				header("Location: dashboard.php");
				echo "<h1>login Successfully</h1> ";
			}
		}
	}
	
?>