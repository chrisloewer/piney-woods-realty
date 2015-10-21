<!DOCTYPE HTML>

<html>
	<head>
		<title>Edit Contact Us Page</title>
		<!--#include virtual="include.html" -->
		<?php include "scripts/checkSession.php" ?>
	</head>
	
	<body>
	
	<!--#include virtual="fixedMenu.html" -->
	<div class="containerNarrow">

		<h1>Edit Contact Us Page</h1>
		
		<form id="editContactPage" action="scripts/editContactPage.php"	method="post">
			<?php
				include 'scripts/db.php';
				$query = "SELECT * FROM ContactUs";
				
				$result = mysqli_query($db_connection, $query);				
				
				$info = mysqli_fetch_array($result);
				
				echo "<legend>Address</legend>

						<label for=\"street1\">Street 1: </label>
						<input type=\"text\" name=\"street1\" size=\"16\" value=\"".$info['street1']."\" />
						
						<label for=\"street2\">Street 2: </label>
						<input type=\"text\" name=\"street2\" size=\"16\" value=\"".$info['street2']."\" />
					
						<label for=\"city\">City: </label>
						<input type=\"text\" name=\"city\" size=\"16\" value=\"".$info['city']."\" />
					
					
						<label for=\"state\">State: </label>
						<input type=\"text\" name=\"state\" size=\"16\" value=\"".$info['state']."\" />
					
					
						<label for=\"zipcode\">Zip Code: </label>
						<input type=\"text\" name=\"zipcode\" size=\"16\"";
						if($info['zip_code'] != 0) {
				echo "value=\"".$info['zip_code']."\"";
			}
			
			echo 		
						"/>";
						
			echo "<legend>Email</legend>
						<input type=\"text\" name=\"email\" size=\"16\" value=\"".$info['email']."\" />";
						
			echo "<legend>Phone Number</legend>
						<input type=\"text\" name=\"phone\" size=\"16\" value=\"".$info['phone']."\" />";
						
			echo "<legend>Office Hours</legend>
						<input type=\"text\" name=\"officeHours\" size=\"16\" value=\"".$info['office_hours']."\" />";
			?>
				<div class="spacerSmall"></div>
				<input type="submit" value="Submit Edits" />
				<div class="spacerTiny"></div>
				<!-- <input type="reset" value="Reset Form" /> -->
				<div class="spacer"></div>
		</form>

	</div>
	</body>
</html>