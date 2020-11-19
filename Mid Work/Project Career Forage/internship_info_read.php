<html><center>
	<fieldset style="background-color:powderblue;height:50%;width:70%">
	<fieldset>
	
	<head>
		<h1 style="color:blue"> Career Forage</h1>
		<style>
			table,
			th,
			td {
				border: 1px solid black;
				border-collapse: collapse;
				padding: 10px;
				}

        
		</style>
	</head>
	
	</fieldset>
	<fieldset>
	<center>
	<body>
		<h2>Read Internship Info</h2>
		<table>
			<tr>
				<td> <a href="internship_info.php">Internship Information</a> </td>
			</tr>
			
			<tr>
				<td><strong>Serial no</strong></td>
				<td><strong>Internship Name</strong></td>
				<td><strong>Internship Details</strong></td>
				
				
			</tr>
			
			<?php 
				$users = simplexml_load_file("internshipinfo.xml");
			
				$data = $users->user;
				$serialno="";
				$internshipname="";
				$internshipdetails="";
				
				
				
				for($i=0;$i<count($data);$i++)
				{
					$serialno=$data[$i]->serialno;
					$internshipname=$data[$i]->internshipname;
					$internshipdetails=$data[$i]->internshipdetails;
					
		
					echo " 	<tr>
								<td>$serialno</td>
								<td>$internshipname</td>
								<td>$internshipdetails</td>
								
								
							</tr>";		
				}
			?>
		</table>	
	</body>	
	</fieldset>
	</fieldset>
</html>	