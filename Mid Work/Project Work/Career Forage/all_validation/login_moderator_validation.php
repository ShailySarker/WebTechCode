<?php
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$email="";
    $err_email="";
	
	$has_err=false;
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="*Username Required";
			$has_err =true;	
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}
		if(empty ($_POST["password"])){
			$err_password="*Password Required";
			$has_err = true;
		}
		else{
			$password=htmlspecialchars($_POST["password"]);
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
		
		if(!$has_err){
			$users = simplexml_load_file("moderators.xml");
			
			$moderators= $users->user;
			echo $moderators[1]->username;
			
			for( $i=0;$i<3;$i++)
			{
				
				if($moderators[$i]->username == $username && $moderators[$i]->password == $password && moderators[$i]->email == $email)
				{
					header("Location: dashboard_moderator.php");
				}	
				
				else{
					echo "Invalid....!!!! Please try again";
				}
			}
			
			
			/*if(!$hasError){
			$users = simplexml_load_file("data.xml");
			
			$data = $users->user;
			echo $data[1]->username;
			for( $i=0;$i<3;$i++)
			{
				
				if($data[$i]->username == $uname && $data[$i]->password == $pass)
				{
					header("Location: dashboard.php");
				}	
				
				else{
					echo "Invalid....!!!! Please try again";
				}
			}
			*/
			/*$user = $users->addChild("user");
			$user->addChild("username",$uname);
			$user->addChild("password",$pass);
			$user->addChild("type","user");
			echo "<pre>";
			print_r($users);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("data.xml","w");
			fwrite($file,$xml->saveXML());*/
		}
	}
	
?>
