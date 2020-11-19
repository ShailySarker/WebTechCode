<html>
	<center>
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
		<h3>Read Job Info</h3>
		<table>
			<tr>
				<td> <a href="job_info.php">Job Information</a> </td>
			</tr>
			
			<tr>
				<td><strong>Serial no</strong></td>
				<td><strong>Job Name</strong></td>
				<td><strong>Job Details</strong></td>
				
				
			</tr>
			
			<?php 
				$users = simplexml_load_file("jobinfo.xml");
			
				$data = $users->user;
				$serialno="";
				$jobname="";
				$jobdetails="";
				
				
				
				for($i=0;$i<count($data);$i++)
				{
					$serialno=$data[$i]->serialno;
					$jobname=$data[$i]->jobname;
					$jobdetails=$data[$i]->jobdetails;
					
		
					echo " 	<tr>
								<td>$serialno</td>
								<td>$jobname</td>
								<td>$jobdetails</td>
								
								
							</tr>";		
				}
			?>
		</table>	
	</body>	
	</fieldset>
	</fieldset>
</html>	