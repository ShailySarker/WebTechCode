<html>
	<center>
	<fieldset style="background-color:powderblue;height:80%;width:70%">
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
		<h1>Users CV</h1>
		<table>
		
			<tr>
				<td align="left"> <a href="dashboard_moderator.php">Go to Moderator Homepage</a> </td>
			</tr>
			<tr>
				<td><strong>Serial No</strong></td>
				<td><strong>First Name</strong></td>
				<td><strong>Last Name</strong></td>
				<td><strong>DOB</strong></td>
				
				<td><strong>Gender</strong></td>
				<td><strong>Educational Background<strong></td>
				<td><strong>Skills</strong></td>
				<td><strong>Years of Working Experience</strong></td>
				<td><strong>Project Descrption<strong></td>
				<td><strong>Contact No</strong></td>
				<td><strong>Email Address</strong></td>
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
				
			</tr>
			<?php 
				$users = simplexml_load_file("viewuserscv.xml");
			
				$data = $users->user;
				$serialno='';
				$fname="";
				$lname="";
				$day="";
				$month="";
				$year="";
				$gender="";
				$eback="";
				$skils="";
				$expr="";
				$pdes="";
				$contact="";
				$email="";
				$street="";
				$city="";
				$state="";
				$postalzip="";
				
				
				for($i=0;$i<count($data);$i++)
				{
					$serialno=$data[$i]->serialno;
					$fname=$data[$i]->fname;
					$lname=$data[$i]->lname;
					$day=$data[$i]->day;
					$month=$data[$i]->month;
					$year=$data[$i]->year;
					$gender=$data[$i]->gender;
					$eback=$data[$i]->eback;
					$skils=$data[$i]->skils;
					$expr=$data[$i]->expr;
					$pdes=$data[$i]->pdes;
					$contact=$data[$i]->contact;
					$email=$data[$i]->email;
					$street=$data[$i]->street;
					$city=$data[$i]->city;
					$state=$data[$i]->state;
					$postalzip=$data[$i]->postalzip;
					
		
					echo " 	<tr>
								<td>$serialno</td>
								<td>$fname</td>
								<td>$lname</td>
								<td>$day
									$month
									$year</td>
								<td>$gender</td>
								<td>$eback</td>
								<td>$skils</td>
								<td>$expr</td>
								<td>$pdes</td>
								<td>$contact</td>
								<td>$email</td>
								<td>$street
									$city
									$state
									$postalzip</td>
							</tr>";		
				}
			?>
		</table>
	</body>
	</center>
	</fieldset>
	</fieldset>
	</center>
</html>	