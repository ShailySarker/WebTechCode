<?php
	$jobname="";
	$err_jobname="";
	$bio="";
	$err_bio="";
	$add="";
	$err_add="";
	$has_error = false;
	
	
	if(isset($_POST["submit"])){
		
		
		///jobname validation
		if(empty($_POST["jobname"])){
			$err_jobname=" * Job Name Required";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["jobname"]);
		}
	
	
	
	/// bio validation
		
		if(!empty($_POST["bio"]))
		{
			$bio = htmlspecialchars($_POST["bio"]);
		}
		else{
			$err_bio = "* Please fill up bio" ;
			$has_error = true;}
		
		///Question validation
		if(!isset($_POST["add"])){
			$err_add="* At least select one option ";
			$has_error = true;
		}
		else{
			$add = $_POST["add"];
		}
		
		
		if(!$has_error){
			echo $jobname;
		}
	}
?>	
