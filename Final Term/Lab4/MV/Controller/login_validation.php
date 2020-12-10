<?php

	require_once "../Model/database_connection.php";

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}

$username = "";
$password = "";
$err_username = "";
$err_password = "";
$validCountReg = 0;

if (isset($_POST['Login'])) {

     //username validation

    if (empty(trim($_POST['username']))) {
        $err_username = "*Username is Required";
    } 
	elseif (strlen($_POST['username']) < 6) {
        $err_username = "*Username must be 6 char long";
    } 
	elseif (strpos($_POST['username'], " ")) {
        $err_username = "*No space allow in username!";
    } 
	else {
        $username = validate($_POST['username']);
        $validCountReg++;
    }



    //password validation

    if (empty(trim($_POST['password']))) {
        $err_password = "*Password is Required";
    } 
	elseif (strlen($_POST['password']) < 8) {
        $err_password = "*Password must contain at least 8 character ";
    } 
	elseif (!strpos($_POST['password'], "1")) {
        $err_password = "*Password must contain 1 number";
    } 
	elseif (ctype_upper($_POST['password'])) {
        $err_password = "*Password must contain 1 lowercase ";
    } 
	elseif (ctype_lower($_POST['password'])) {
        $err_password = "*Password must contain 1 uppercase";
    } 
	else {
        $password = validate($_POST['password']);
        $validCountReg++;
    }
	
	
    if ($validaLogin == 2) {
        loginUser($username, $password);
    }
}

function loginUser($username, $password)
{
    $sqlLogin = "select * from admin where username='$username' and password = '$password'";
    if (count(getValues($sqlLogin)) == 1) {
        header("location:dashboard.php");
    } else {
        echo "invalid username and password..........!!!";
    }
}
?>