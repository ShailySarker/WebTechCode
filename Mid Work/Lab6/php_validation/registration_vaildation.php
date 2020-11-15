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
	
	
    if(isset($_POST["Ok"])){
       

	   ///Full NAME VALIDATION
        if(empty($_POST["fullname"])){
            $err_fullname="* Full Name Required";
            $has_err=true;
        }
        else{
            $fullname=htmlspecialchars($_POST["fullname"]);
        }
		
		
		
        ///USER NAME VALIDATION
        if(empty($_POST["username"])){
            $err_username=" * Username Required";
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
					//else{
						//$err_password = "* At least one digit is required";
						//$has_error = true;}
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
		
		
		
        ///CONFIRMPASSWORD VALIDATION
        if(empty($_POST["confirmpassword"])){
            $err_confirmpassword="* ConfirmPassword Required";
            $has_err=true;
        }
        elseif($_POST["password"] != htmlspecialchars($_POST["confirmpassword"])){
            $err_confirmpassword="* Password and Confirm Password must be same.";
            $has_err=true;
        }
		else{
			$confirmpassword=htmlspecialchars($_POST["confirmpassword"]);
		}
		
		
        ///GENDER VALIDATION
		
        if(!isset($_POST["gender"])){
			$err_gender="* At least select one gender ";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		
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
		
		
        ///CONTACT NO VALIDATION
        if(empty($_POST["contact"]))
		{
			$err_contact = "* Contact no. required";
		}
		else if(!is_numeric($_POST["contact"]))
		{
			$err_contact = "* Numeric charecter required";
		}
		else{ $number = htmlspecialchars($_POST["contact"]);
		}
		
		
		///CITY VALIDATION
		if(isset($_POST["city"])){
            $city=htmlspecialchars($_POST["city"]);
        }
        else{
            $err_city="* Please Select a city";
            $has_err=true;
        }
		
		
		
		if(!$has_error=true){
			echo $fullname;
		}
		
		
		
		
	}

?>
