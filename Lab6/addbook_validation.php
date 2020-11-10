<?php 
    $bname="";
    $err_bname="";
	$has_err=false;

    $has_err=false;
    if(isset($_POST["add"])){
		
        if(empty($_POST["bname"])){
            $err_bookname="Book Name Required";
            $has_err=true;
        }
        else{
            $bookname=htmlspecialchars($_POST["bname"]);
        }
        
	    
	}
	
?>