<?php 
	
	$dbservername="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="Day1";
	
	$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
	$q = "SELECT * FROM  USERS";
	$result =mysqli_query($conn, $q);
	
	if(mysqli_num_rows($result)>0)
	{
		
		echo '<table border="1" style="broder-collapse:collapse;">';
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th> Username</th>";
		echo "<th> Password</th>";
		echo "<th> Type</th>";
		echo "</tr>";
		
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["userName"]."</td>";
			echo "<td>".$row["type"]."</td>";
			echo "<td>". "<a href=''>edit</a> "."</td>";
			echo "<td>". "<a href=''>del</a> "."</td>";
			echo "</tr>";
		}
	
		echo "</table>";
	}
	
?>

