<?php
include 'db.php';

$query = "UPDATE WebsiteInfo SET
	bio='".str_replace("\n", "<br />", $_POST['bio'])."' 
	WHERE site_id=0"
	;

mysqli_query($db_connection, $query);

//echo "<h1>Successfully updated the listing!</h1>";
?>

<html>
	<head>
		<title>Edit Home Page</title>
		<!--#include virtual="include.html" -->
	</head>
	
	<body>
	
	<!--#include virtual="fixedMenu.html" -->

	<div class="spacerSmall"></div>
	<h1>Successfully Updated Home Page</h1>
		
	<div class="centerText"><a href="../index.php">Return to Admin Page</a></div>
	<div class="spacerSmall"></div>
	<div class="centerText"><a href="../editAboutPageForm.php">Return to Edit About Us Page</a></div>
	</body>
</html>