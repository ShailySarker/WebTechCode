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
            $err_fullname="Full Name Required";
            $has_err=true;
        }
        else{
            $fullname=htmlspecialchars($_POST["fullname"]);
        }
		
		
		
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
                $err_email="'@' Must be sit before '.'.";
                $has_err=true;
            }
        }
        else{
            $err_email="Email must be contained '@' and '.'.";
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


