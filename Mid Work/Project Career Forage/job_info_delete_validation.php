<?php
	$jobname="";
	$err_jobname="";
	
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