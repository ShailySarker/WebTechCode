<?php
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$hasError=false;
	
	
	$flag=false;
	
	///USER NAME VALIDATION
        if(empty($_POST["username"])){
            $err_username="Username Required";
            $has_err=true;
        }
        elseif((strlen($_POST["username"])<6)){
            $err_username="Username must be 6 char";
            $has_err=true;
        }
        elseif(strpos($_POST["username"]," ")){
            $err_username="No space allow in username!";
            $has_err=true;
        }
        else{
            $username=htmlspecialchars($_POST["username"]);
        }
		
		
        ///PASSWORD VALIDATION
        if(empty($_POST["password"])){
            $err_password="Password Required";
            $has_err=true;
        }
        elseif(strlen($_POST["password"])<8){
            $err_password="Password must be 8 char";
            $has_err=true;
        }
        elseif(!strpos($_POST["password"],"#") || !strpos($_POST["password"],"?")){
            $err_password="Password must be contained '#' or '?'.";
            $has_err=true;
        }
        elseif(!strpos($_POST["password"],"1")){
            $err_password="Password must contain 1 numeric";
            $has_err=true;
        }
        elseif(strtolower($_POST["password"])==$_POST["password"] || strtolower($_POST["password"])==$_POST["password"]){
            $err_password="Password must contain Uppercase and Lowercase letter.";
            $has_err=true;
        }
        else{
            $password=htmlspecialchars($_POST["password"]);
        }
		
		if(!$hasError)
		{
			$admins = simplexml_load_file("admin.xml");
			foreach($admins as $admin)
			{
                if(strcmp($admin->username,$username)==0 && strcmp($admin->password,$password)==0)
				{

					header("Location: dashboard.php");
					$flag=true;
					break;
                }
			}
			
			if(!$flag)
			{
				echo "Invalid Credentials!";
			}
		}
	}
	
?>