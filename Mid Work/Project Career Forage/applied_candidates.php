<html>
	<center>
	<fieldset style="background-color:powderblue;height:70%;width:70%">
	<fieldset>
	
	<head><h1 style="color:blue"> Career Forage</h1>
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
		<h3>View Applied Candidates:</h3>
		<table>
			<tr>
				<td align="left"> <a href="dashboard_moderator.php">Go to Moderator Homepage</a> </td>
			</tr>
			
			
			<tr>
				<td><strong>Serialno</strong></td>
				<td><strong>User Name</strong></td>
				<td><strong>Email Address</strong></td>
				<td><strong>Contact no</strong></td>
				<td>
					<strong>
						Address
						<table>
						<tr>
						<td>Street</td>
						<td>City</td>
						<td>State</td>
						<td>Pastal/Zip</td>
						</tr>
						</table>
					<strong>
				</td>
				
			</tr>
			<?php 
				$users = simplexml_load_file("appliedcandidates.xml");
			
				$data = $users->user;
				$serialno="";
				$username="";
				$email="";
				$contact="";
				$street="";
				$city="";
				$state="";
				$postalzip="";
				
				
				for($i=0;$i<count($data);$i++)
				{
					$serialno=$data[$i]->serialno;
					$username=$data[$i]->username;
					$email=$data[$i]->email;
					$contact=$data[$i]->contact;
					$street=$data[$i]->street;
					$city=$data[$i]->city;
					$state=$data[$i]->state;
					$postalzip=$data[$i]->postalzip;
		
					echo " 	<tr>
								<td>$serialno</td>
								<td>$username</td>
								<td>$email</td>
								<td>$contact</td>
								<td>$street
									$city
									$state
									$postalzip</td>
								
							</tr>";		
				}
			?>
		</table>
	</body>
	
	</fieldset>
	</fieldset>
</center>	
</html>