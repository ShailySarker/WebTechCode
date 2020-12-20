<?php
	include 'Book_With_Header.php';
	require_once "../Controller/Book_Controller.php";
	$books = getAllBook();
?>



<html>
<center>
<fieldset>
<head>
    
    <title>All Book</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 20px;
        }

        th,
        td {
            width: 100px;
        }
    </style>
</head>

<body>

    <input type="text" placeholder="Which book do you want?? Please enter the Book Name" style="padding: 4px; margin: 20px; width: 450px;">
    <h1 style="color:Blue">All Book</h1>
    <table id="books-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Author</th>
            <th>Edition</th>
            <th>BookImage</th>
        </tr>
        <?php
        foreach ($books as $book) {
            echo "<tr>";
            echo "<td>" . $book['ID'] . "</td>";
            echo "<td>" . $book['Name'] . "</td>";
            echo "<td>" . $book['Author'] . "</td>";
            echo "<td>" . $book['Edition'] . "</td>";
            echo "<td>" . $book['BookImage'] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>
  
    <script>
        function searchBooks(bookInput) {
            var BookName = bookInput.value;
            if (BookName.length == 0) {
                document.getElementById("books-table").innerHTML = "";
                return;
            }
            //console.log(BookName);
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.status == 200 && this.readyState == 4) {
                    document.getElementById("books-table").innerHTML = this.responseText;
                }
            }

            xhr.open("GET", "Search_Book.php?BookName=" + BookName, true);
            xhr.send();
        }
    </script>
</body>
</fieldset>
</center>
</html>

<?php 
	include 'Book_With_Footer.php';
?>