<?php

include 'db.php';

$insertListing = "INSERT INTO Listings
	(title, class, key_features, description, mls_num, acreage, house_sqft, bedrooms, bathrooms, price, street1, street2, city, state, zip_code, date)
	VALUES
	('".$_POST['title']."', '".$_POST['class']."', '".$_POST['keyFeatures']."', '".$_POST['description']."', '".$_POST['mls']."', '".$_POST['acreage']."', 
	'".$_POST['houseFootage']."', '".$_POST['bedrooms']."', '".$_POST['bathrooms']."', '".$_POST['price']."', '".$_POST['street1']."', '".$_POST['street2']."', 
	'".$_POST['city']."', '".$_POST['state']."', '".$_POST['zipcode']."', CURRENT_TIMESTAMP)
	;";

mysqli_query($db_connection, $insertListing)
	or die("Error: Could not add listing to table");
	
//echo "<h1>Successfully added listing to the database!</h1>";
?>

<html>
	<head>
		<title>Add Listing</title>
		<!--#include virtual="include.html" -->
	</head>
	
	<body>
	
	<!--#include virtual="fixedMenu.html" -->

	<div class="spacerSmall"></div>
	<h1>Successfully Added Listing</h1>
		
	<div class="centerText"><a href="../listings.php">Return to listings page</a></div>
	</body>
</html>