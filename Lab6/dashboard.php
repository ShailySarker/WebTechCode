<?php 
	{
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
				$books = simplexml_load_file("book.xml");
			
				$data = $books->book;
				$srno="";
				$bname="";
				$publisher="";
				$isbn="";
				$price="";
				$img="";
				$delete="";
				//echo $data[1]->username;
				$i=0;
				for( ;$i<count($data);$i++)
				{
					
					$number=$data[$i]->number;
					$name=$data[$i]->bname;
					$pub=$data[$i]->publisher;
					$isbn=$data[$i]->isbn;
					$price=$data[$i]->price;
					$img=$data[$i]->image;
					$delete=$data[$i]->del;
		
					echo " 	<tr>
								<td>$number</td>
								<td>$name</td>
								<td>$pub</td>
								<td>$isbn</td>
								<td>$price</td>
								<td><$img ></td>
								<td><$delete></td>
							</tr>";		
				}
			?>
		</table>
	</body>
	<center>
	</fieldset>
	</fieldset>
</html>