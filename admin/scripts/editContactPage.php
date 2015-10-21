<?php
include 'db.php';

$query = "UPDATE ContactUs SET
	street1='".$_POST['street1']."', 
	street2='".$_POST['street2']."', 
	city='".$_POST['city']."', 
	zip_code='".$_POST['zipcode']."', 
	state='".$_POST['state']."', 
	email='".$_POST['email']."', 
	phone='".$_POST['phone']."', 
	office_hours='".$_POST['officeHours']."' 
	WHERE contact_id=0"
	;

mysqli_query($db_connection, $query);

//echo "<h1>Successfully updated the listing!</h1>";
?>

<html>
	<head>
		<title>Edit Contact Us Page</title>
		<!--#include virtual="include.html" -->
	</head>
	
	<body>
	
	<!--#include virtual="fixedMenu.html" -->

	<div class="spacerSmall"></div>
	<h1>Successfully Updated Contact Us Page</h1>
		
	<div class="centerText"><a href="../index.php">Return to Admin Page</a></div>
	<div class="spacerSmall"></div>
	<div class="centerText"><a href="../editContactPageForm.php">Return to Edit Contact Us Page</a></div>
	</body>
</html>