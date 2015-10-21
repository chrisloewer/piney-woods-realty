<?php
include 'db.php';

$query = "UPDATE Listings SET
	title='".$_POST['title']."', 
	class='".$_POST['class']."', 
	key_features='".$_POST['keyFeatures']."', 
	description='".$_POST['description']."', 
	mls_num='".$_POST['mls']."', 
	acreage='".$_POST['acreage']."', 
	house_sqft='".$_POST['houseFootage']."', 
	bedrooms='".$_POST['bedrooms']."', 
	bathrooms='".$_POST['bathrooms']."', 
	price='".$_POST['price']."', 
	street1='".$_POST['street1']."', 
	street2='".$_POST['street2']."', 
	city='".$_POST['city']."', 
	state='".$_POST['state']."', 
	zip_code='".$_POST['zipcode']."'
	WHERE listing_id=".$_GET['id'].";";

mysqli_query($db_connection, $query);

//echo "<h1>Successfully updated the listing!</h1>";
?>

<html>
	<head>
		<title>Edit Listing</title>
		<!--#include virtual="include.html" -->
	</head>
	
	<body>
	
	<!--#include virtual="fixedMenu.html" -->

	<div class="spacerSmall"></div>
	<h1>Successfully Updated Listing</h1>
		
	<div class="centerText"><a href="../listings.php">Return to listings page</a></div>
	</body>
</html>