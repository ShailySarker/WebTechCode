<?php
	session_start();
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	
	
	$hasError=false;
	
	
	if(isset($_POST["login"])){
		
		///username validation
		if(empty($_POST["username"])){
			$err_username="* Username Required";
			$hasError =true;	
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}
		
		///password validation
		if(empty ($_POST["password"])){
			$err_password="* Password Required";
			$hasError = true;
		}
		else{
			$password=htmlspecialchars($_POST["password"]);
		}
		
		if(!$hasError){
			$users = simplexml_load_file("admin.xml");
			
			$data = $users->user;
			
			$i=0;
			$_SESSION["username"] = "";
			$_SESSION["password"] = "";
			
			for( ;$i<count($data);$i++)
			{
				
				if($data[$i]->username == $username && $data[$i]->password == $password)
				{
					header("Location: dashboard.php");
					$_SESSION["username"] = $username;
					$_SESSION["password"] = $password;
					break;
				}
					
			}
			if($i==count($data))
			{
				echo "invalid id or password";
			}
			//$user = $users->addChild("user");
			//$user->addChild("username",$uname);
			//$user->addChild("password",$pass);
			//$user->addChild("type","user");
			//echo "<pre>";
			//print_r($users);
			//echo "</pre>";
			
			//$xml = new DOMDocument("1.0");
			//$xml->preserveWhiteSpace=false;
			//$xml->formatOutput= true;
			//$xml->loadXML($users->asXML());
			
			
			//$file = fopen("data.xml","w");
			//fwrite($file,$xml->saveXML());
		}
	}
	
?>