<?php 
	session_start();
	if($_SESSION["username"]=="" && $_SESSION["password"]==""){
		header("Location: login.php");
	}

?>
<html>
	<fieldset>
	<fieldset>
	<center>
	<head>Book Store</head>
	</center>
	</fieldset>
	<fieldset>
	<center>
	<body>
		<table>
			
			<tr>
				<td> <a href="addbook.php">add book</a> </td>
			</tr>
			<tr>
				<td>SR.NO</td>
				<td>NAME</td>
				<td>PUBLISHER</td>
				<td>ISBN</td>
				<td>PRICE</td>
				<td>IMAGE</td>
				<td>DELETE</td>
			</tr>
			<?php 
				$books = simplexml_load_file("books.xml");
			
				$data = $books->book;
				$srno="";
				$bname="";
				$publisher="";
				$isbn="";
				$price="";
				$img="";
				$delete="";
				
				$i=0;
				for( ;$i<count($data);$i++)
				{
					
					$number=$data[$i]->SR.NO;
					$name=$data[$i]->NAME;
					$publisher=$data[$i]->PUBLISHER;
					$isbn=$data[$i]->ISBN;
					$price=$data[$i]->PRICE;
					$img=$data[$i]->IMAGE;
					$delete=$data[$i]->DELETE;
		
					echo " 	<tr>
								<td>$number</td>
								<td>$name</td>
								<td>$pub</td>
								<td>$isbn</td>
								<td>$price</td>
								<td><img src='$img' width='100px' height='88px'></td>
								<td><img src='$delete' width='100px' height='100px'></td>
							</tr>";		
				}
			?>
		</table>
	</body>
	<center>
	</fieldset>
	</fieldset>
</html>