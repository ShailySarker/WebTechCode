<html>
	<center>
	<fieldset style="background-color:powderblue;height:60%;width:70%">
	
	
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
		<h3>Read the Users of Undergrade Student:</h3>
		<table>
			<tr>
				<td> <a href="undergrade_student_user.php">Undergrade Student User Info</a> </td>
			</tr>
			
			
			<tr>
				<td><strong>SRNO</strong></td>
				<td><strong>User Name</strong></td>
				<td><strong>Email Address</strong></td>
				<td><strong>Contact no</strong></td>
				<td>
					
					<strong>
						<table><tr>
						Address
						<td>Street</td>
						<td>City</td>
						<td>State</td>
						<td>Pastal/Zip</td>
						</tr></table>
					<strong>
				</td>
				</td>
				
			</tr>
			<?php 
				$users = simplexml_load_file("undergradeusers.xml");
			
				$data = $users->user;
				$SRNO="";
				$username="";
				$email="";
				$contact="";
				$streetaddress="";
				$city="";
				$state="";
				$postalzipcode="";
				
				
				for($i=0;$i<count($data);$i++)
				{
					$SRNO=$data[$i]->SRNO;
					$username=$data[$i]->username;
					$email=$data[$i]->email;
					$contact=$data[$i]->contact;
					$streetaddress=$data[$i]->streetaddress;
					$city=$data[$i]->city;
					$state=$data[$i]->state;
					$postalzipcode=$data[$i]->postalzipcode;
		
					echo " 	<tr>
								<td>$SRNO</td>
								<td>$username</td>
								<td>$email</td>
								<td>$contact</td>
								<td>$streetaddress
									$city
									$state
									$postalzipcode</td>
								
							</tr>";		
				}
			?>
		</table>
	</body>
	
	</fieldset>
	</fieldset>
</center>	
</html>