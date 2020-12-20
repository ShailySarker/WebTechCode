<?php

	require_once "../Controller/Book_Controller.php";

if (isset($_GET['BookName'])) {
    $BookName = $_GET['BookName'];
    $books = getSearchBook($BookName);
    if (count($books) > 0) {

        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Author</th>";
        echo "<th>Edition</th>";
        echo "<th>BookImage</th>";
        echo "</tr>";
        foreach ($books as $book) {

            echo "<tr>";
            echo "<td>" . $book['ID'] . "</td>";
            echo "<td>" . $book['Name'] . "</td>";
            echo "<td>" . $book['Author'] . "</td>";
            echo "<td>" . $book['Edition'] . "</td>";
           // echo "<td><a href='Book_Detail.php?ID=" . $book['ID'] . "'>" . $book['Name'] . " "<br>"
					//<img src = 'Resources/Importance-of-Books' width=50px height=50px></a></td>";
			//echo "</tr>";
			echo "<td><a href='Book_Detail.php?ID=".$book['ID']."'>
				<img src ='"$book["Resources/Importance-of-Books"]."' width=50px height=50px></a></td> 
			";
			echo "</tr>";
        }
    } 
	else 
	{
        echo "<h1>Sorry....!!!<br>This book is not found.</h1>";
    }
}
?>
