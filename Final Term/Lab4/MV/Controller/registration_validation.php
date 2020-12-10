<?php

require_once "../Model/database_connection.php";

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}


$name ="";
$username = "";
$password = "";
$email = "";
$err_name = "";
$err_username = "";
$err_password = "";
$err_email = "";
$validCountReg = 0;

if (isset($_POST['Register'])) {

    //name validation 

    if (empty(trim($_POST['name']))) {
        $err_name = "*Name is Required";
    }
	else {
        $name = htmlspecialchars($_POST['name']);
        $validCountReg++;
    }


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

    //email validation

    if (empty(trim($_POST['email']))) {
        $err_email = "*Email is Required ";
    }
	elseif (strpos($_POST['email'], " ")) {
        $err_email = "*Space is not allowed";
    } 
	elseif (!strpos($_POST['email'], "@")) {
        $err_email = "*Email is not valid. No [@] ";
    } 
	elseif (strpos($_POST['email'], "@")) {
        $atRatePos = strpos($_POST['email'], "@");

        $tempEmail = $_POST['email'];
        $hasDot = false;

        for ($i = $atRatePos; $i < strlen($tempEmail); $i++) {
            if ($tempEmail[$i] == ".") {
                $hasDot = true;
                break;
            }
        }

        if ($hasDot) {
            $email = htmlspecialchars($_POST['email']);
            $validCountReg++;
        } else {
            $err_email = "*Email is not valid ";
        }
    }

    if ($validCountReg == 4) {
        AddUser($fullname, $username, $email, $password);
    }
}

function AddUser($fullname, $username, $email, $password)
{
    $password = md5($password);
    $sqlAddUser = "INSERT INTO `reg_user` (`name`, `username`, `password`, `email`) VALUES ( '$name''$username', '$password', '$email');";
    if (dbOperation($sqlAddUser)) {
        header("location:login.php");
    }
}
$validaLogin = 0;

