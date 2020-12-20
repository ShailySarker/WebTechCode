<?php
	include 'Book_With_Header.php';
	require_once "../Controller/Book_Controller.php";
	$BookDetail = getBookDetail($_GET['id']);
	
	
	//$books = $_GET['ID'];
    //$BookDetail = getBookDetail($books);
	
	//$BookName = $_GET['BookName'];
    //$books = getSearchBook($BookName);

?>


<html>
<center>
<fieldset>
<head>
     <title> Book Detail<?php echo $_GET['id']; ?></title>
</head>

<body>
	 <h1 style="color:Blue">Book Detail</h1>
    <?php
    if (count($BookDetail)) 
	{
        echo $BookDetail[0]['Name'] . "<br>";
        echo $BookDetail[0]['Author'] . "<br>";
        echo $BookDetail[0]['Edition'] . "<br>";
        echo $BookDetail[0]['BookImage'] . "<br>";
    }
	else
	{
        echo "<h1>Sorry....!!!<br>This book is not available now.</h1>";
    }
    ?>
</body>
</fieldset>
</center>

</html>

<?php 
	include 'Book_With_Footer.php';
?>