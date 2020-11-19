<?php
$username="";
$err_username="";
$add="";
$err_add="";

$has_error = false;
	
	
	if(isset($_POST["Delete"])){
		
		///username validation
		if(empty($_POST["username"])){
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
		//Question validation
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