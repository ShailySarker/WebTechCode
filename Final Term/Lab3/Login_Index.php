<?php 
	
	require_once "Model/DB_Connection.php";
	$username="";
	$password="";
	  
   if (isset($_POST['Login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    loginUser($username, $password);
}



function loginUser($username, $password)
{
    $password = md5($password);
    $sqlLogin = "select * from users where username='$username' and password = '$password'";
    if (count(getValues($sqlLogin)) == 1) {
        $_SESSION['username'] = $username;
        print_r($_SESSION);
        header("Location:Dashboard.php");
		echo "Login is done successfully........!!!!";
    } 
	
	else {
        echo "Username or Password is not same.......";
    }
}

function getUserDetails()
{
    $sqlFindUser = "select * from users;";
    $data = getValues($sqlFindUser);
    return $data;
}
	
?>


<html>
	
	<body>
		<fieldset>
			<form action=""  onsubmit="return validate2()" method="post">
			<center>
			<h1> Welcome to Index.....!! <br> Please login</h1>
				<table>
					<tr>
						<td><strong>Username:</strong></td>
						<td><input type="text" id="username" name="username"><span id="err_username"></span></td>
						
						
					</tr>
					<tr>
						<td><strong>Password:</strong></td>
						
						<td><input type="password" id="password" name="password"><span id="err_password"></span></td>
						
					<tr>	
				
						<td colspan="2" align="right">
							<input type="submit" id="Login" name="Login" value="Login">
						</td>
					</tr>
				</table>
			</center>	
			</form>
			
			
			<script src="JS validation/Login_Index_Validation.js"></script>
			
		</fieldset>
	</body>
</html>