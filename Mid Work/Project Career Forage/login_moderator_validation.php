<?php
	session_start();
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$email="";
    $err_email="";
	
	$has_err=false;
	if(isset($_POST["login"]))
	{
		
		///USER NAME VALIDATION
		
		if(empty($_POST["username"]))
		{
			$err_username = "*Required user name";
			$has_err=true;
		}
		else if(strlen($_POST["username"]) < 6)
		{
			$err_username = "*At least 6 char required";
			$has_err=true;
		}
		else if(strpos($_POST["username"]," "))
		{
			$err_username = "*No space is allowed";
			$has_err=true;
		}
		
		else{
			$username = htmlspecialchars($_POST["username"]);
		}
		///PASSWORD VALIDATION
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
		
		
		
		
		///EMAIL ADDREESS VALIDATION
        if(empty($_POST["email"])){
            $err_email="* Email Required";
            $has_err=true;
        }
       else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				if($str[$i] == "."){
					$flag = true;
					break;}
			}
			
			if($flag == true){
				$email = htmlspecialchars($_POST["email"]);}
			else{
				$err_email = "*invalid email pattern";}
		}
        else{
            $err_email="* Email must be contained '@' and '.'";
            $has_err=true;
        }
		
		if(!$has_err){
			$users = simplexml_load_file("moderators.xml");
			
			$moderators= $users->user;//$moderators provide data & $users as moderators
			echo $moderators[1]->username;
			$_SESSION["username"]="";
			$_SESSION["password"]="";
			$_SESSION["email"]="";
			for( $i=0;$i<count($moderators);$i++)
			{
				
				if($moderators[$i]->username == $username && $moderators[$i]->password == $password && moderators[$i]->email == $email)
				{
					header("Location: dashboard_moderator.php");
					$_SESSION["username"]=$username;
					$_SESSION["password"]=$password;
					$_SESSION["email"]=$email;
					break;
				}	
				
				else{
					echo "<h1>Invalid....!!!! Please try again</h1>";
				}
			}
			
		
		}
	}
	
?>
