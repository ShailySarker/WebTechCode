<?php
	$username="";
	$err_username="";
	$email="";
	$err_email="";
	$contact="";
	$err_contact="";
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
	$add="";
	$err_add="";
	
	$has_error = false;
	
	
	if(isset($_POST["submit"])){
		
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
		
		
		 ///CONTACT NO VALIDATION
        if(empty($_POST["contact"]))
		{
			$err_contact = "* Contact no. required";
		}
		else if(!is_numeric($_POST["contact"]))
		{
			$err_contact = "* Numeric charecter required";
		}
		else{ $number = htmlspecialchars($_POST["contact"]);}
		
		
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
		
		
		///Question validation
		if(!isset($_POST["add"])){
			$err_add="* At least select one option ";
			$has_error = true;
		}
		else{
			$add = $_POST["add"];
		}
		
		
		
		if(!$has_error){
			echo $username;
		}
		
	}	
	
?>