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
	<head><h1>Book Store</h1></head>
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
				<td><strong>SRNO</strong></td>
				<td><strong>NAME</strong></td>
				<td><strong>PUBLISHER</strong></td>
				<td><strong>ISBN</strong></td>
				<td><strong>PRICE</strong></td>
				<td><strong>IMAGE<strong></td>
				<td><strong>DELETE</strong></td>
			</tr>
			<?php 
				$books = simplexml_load_file("books.xml");
			
				$data = $books->book;
				$SRNO='';
				$bname="";
				$publisher="";
				$isbn="";
				$price="";
				$img="";
				$delete="";
				
				
				for($i=0;$i<count($data);$i++)
				{
					$SRNO=$data[$i]->SRNO;
					$bname=$data[$i]->NAME;
					$publisher=$data[$i]->PUBLISHER;
					$isbn=$data[$i]->ISBN;
					$price=$data[$i]->PRICE;
					$img=$data[$i]->IMAGE;
					$delete=$data[$i]->DELETE;
		
					echo " 	<tr>
								<td>$SRNO</td>
								<td>$bname</td>
								<td>$publisher</td>
								<td>$isbn</td>
								<td>$price</td>
								<td><img src='$img' width='100px' height='100px'></td>
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