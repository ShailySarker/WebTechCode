<?php 
	require_once 'Model/DB_Connection.php';
	
		$query="select * from users";
		$result=_GET($query);
		
?>


<html>
	<body>
		<center>
		<fieldset>
		<style>
				table,th,td{
				border: 1px solid black;
				border-collapse: collapse;
				padding: 10px;}
		</style>
			<form action="" method="post">
				<h1> Welcome to Webtech</h1>
				
				<table>
				
					
					<tr>
						<th><strong>Name</strong></th>
						<th><strong>Username</strong></th>
						<th><strong>Email</strong></th>
						<th><strong>Phone</strong></th>
					</tr>
					<?php 
					foreach($result as $p)
					{
						
						echo "<tr>";
							echo "<td>".$p["name"]."</td>";
							echo "<td>".$p["username"]."</td>";
							echo "<td>".$p["email"]."</td>";
							echo "<td>".$p["phone"]."</td>";
							
						echo "</tr>";
					}
				?>
				
		
				</table>
			
			</form>
			
		</fieldset>
		</center>
	</body>
</html>