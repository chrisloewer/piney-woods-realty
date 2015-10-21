<?php
include 'db.php';

$query = "UPDATE WebsiteInfo SET
	featured_listing_1='".$_POST['featured1']."', 
	featured_listing_2='".$_POST['featured2']."', 
	about_us='".$_POST['aboutUs']."', 
	our_community='".$_POST['community']."', 
	other_properties_1='".$_POST['other1']."', 
	other_properties_2='".$_POST['other2']."', 
	runway_access='".$_POST['runwayAccess']."' 
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
	<div class="centerText"><a href="../editHomePageForm.php">Return to Edit Home Page</a></div>
	</body>
</html>