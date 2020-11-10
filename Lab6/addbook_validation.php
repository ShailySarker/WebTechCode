<?php 
    $bname="";
    $err_bname="";  
	$catagory="";
	$err_catagory="";
	$dec="";
	$err_dec="";
	$publisher="";
	$err_publisher="";
	$eddition="";
	$err_eddition="";
	$isbn="";
	$err_isbn="";
	$pages="";
	$err_pages="";
	$price="";
	$err_price="";
	$has_err=false;	
	
    if(isset($_POST["add"])){
		
		///Book Name validation
        if(empty($_POST["bname"])){
            $err_bname="Book Name Required";
            $has_err=true;
        }
        else{
            $bname=htmlspecialchars($_POST["bname"]);
        }
		
		///Catagory validation
		if(!isset($_POST["catagory"]))
		{
			$err_catagory= "catagory is required";
			$has_err=true;
		}
		else{ $catagory = htmlspecialchars($_POST["catagory"]);}
		
		
		/// Decription validation
		if(empty($_POST["dec"]))
		{
			$err_dec = "Decription is required";
			$has_err=true;
		}
		else{ $dec = htmlspecialchars($_POST["dec"]);}
		
		//Publisher validation
		if(empty($_POST["publisher"]))
		{
			$err_publisher = "Publisher is required";
			$has_err=true;
		}
		else{ $publisher = htmlspecialchars($_POST["publisher"]);}
		///Edition validation
		if(empty($_POST["eddition"]))
		{
			$err_eddition = "eddition is required";
			$has_err=true;
		}
		else{ $eddition = htmlspecialchars($_POST["eddition"]);}
		///ISBN validation
		if(empty($_POST["isbn"]))
		{
			$err_isbn = "isbn is required";
			$has_err=true;
		}
		else{ $isbn = htmlspecialchars($_POST["isbn"]);}
		///Pages validation
		if(empty($_POST["pages"]))
		{
			$err_pages = "pages  number are required";
			$has_err=true;
		}
		else if(!is_numeric($_POST["pages"]))
		{
			$err_pages = "pages  number must be numeric charecter";
			$has_err=true;
		}
		else{ $pages = htmlspecialchars($_POST["pages"]);}
		
		///Price validation
		if(empty($_POST["price"]))
		{
			$err_price = "price is required ";
			$has_err=true;
		}
		else if(!is_numeric($_POST["price"]))
		{
			$err_price = "price number must be numeric charecter";
			$has_err=true;
		}
		else{ $price = htmlspecialchars($_POST["price"]);}
		
		if($has_err==false)
		{
			$books = simplexml_load_file("book.xml");
			$data = $books->book;
			
			$book = $books->addChild("book");
			$book->addChild("number",count($data)+1);
			$book->addChild("name",$bname);
			$book->addChild("publisher","$publisher");
			$book->addChild("isbn",$isbn);
			$book->addChild("price",$price);
			
			
		
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($books->asXML());
			
			
			$file = fopen("book.xml","w");
			fwrite($file,$xml->saveXML());
			echo "Finally the book is added successfully ....!!!";
		}
		
	}
	

?>
