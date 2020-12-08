<?php 
	
    require_once "Model/DB_Connection.php";

	$name="";
	$username="";
	$email="";
	$password="";
	$phone="";
	
	
	if (isset($_POST['Register'])) {
    
    $name = $_POST['name'];
	$username = $_POST['username'];
    $password = $_POST['password'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];


    if (newUser($username)) {
        AddUser($name, $username,$password, $email, $phone);
		echo "Register successfully........!!!!";
    } 
	
	else {
        $err_username = "The Username has already existed....";
    }
}

function newUser($username)
{
    $sqlFindUser = "select * from users where username='$username'";
    if (count(getValues($sqlFindUser)) >= 1) {
        return false;
    }
    return true;
}



function AddUser($name, $username,$password, $email, $phone)
{
    $password = md5($password);
    $sqlAddUser = "INSERT INTO `users` (`name`,`username`, `password`, `email`, `phone`) VALUES ('$name','$username', '$password', '$email', '$phone');";
    if (dbOperation($sqlAddUser)) {
        header("location:Login_Index.php");
    }
}

 

?>

<html>
	
	<body>
		<center>
		<fieldset>
		
			<form action="" onsubmit="return validate1()" method="post">
				<h1> Welcome to Registeration.............!!!!!</h1>
				<table>
				
					
					<tr>
						<td><strong> Name:</strong></td>
						<td><input type="text"  id="name" name="name"><span id="err_name"></span></td>
						
					</tr>
					<tr>
						<td><strong>User Name:</strong></td>
						<td><input type="text" id="username" name="username"><span id="err_username"></span></td>
						
					</tr>
					<tr>					
						<td><strong>Password:</strong></td>
						<td><input type="password" id="password" name="password"><span id="err_password"></span></td>
						
					</tr>
					<tr>	
						<td><strong>Email:</strong></td>
						<td><input type="text" id="email" name="email"><span id="err_email"></span></td>
					</tr>
					<tr>
						<td><strong>Phone:</strong></td>
						<td><input type="text" id="phone" name="phone"><span id="err_phone"></span></td>
						
					</tr>
				
					
					<tr>
						<td></td>
						<td colspan="2" align="center">
							<input type="submit" id="Register" name="Register" value="Register">
						</td>
						
					</tr>					
				</table>
			
			</form>
			<a href="Login_Index.php">Already Registered? Login</a>
			<script src="JS validation/Registration_Validation.js"></script>
			
		</fieldset>
		</center>
	</body>
</html>