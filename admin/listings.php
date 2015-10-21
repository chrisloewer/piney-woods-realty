<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<!--#include virtual="include.html" -->
	<?php include "scripts/checkSession.php" ?>

</head>
<body>
	
<!--#include virtual="fixedMenu.html" -->


	<div class="spacerSmall"></div>
	<h1 class="centerText">LISTINGS PAGE</h1>
	<div class="spacer"></div>

	<h3 class="centerText"><a href="addListingForm.php">Add Listings</a></h3>
	<div class="spacerSmall"></div>
	<h3 class="centerText">Edit Listings</h3>
	<table class="editListingTable" summary="Listings">
	<?php
		include "scripts/db.php";
		
		$sql = "SELECT * FROM Listings";
	
		$result = mysqli_query($db_connection, $sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_array($result)) {
				
				echo "<tr>
				<td>".$row['title']."</td>
				<td><a href=\"editListingForm.php?id=".$row['listing_id']."\">Edit</a></td>
				<td><a href=\"editPictures.php?id=".$row['listing_id']."\">Pictures</a></td>
				<td><a href=\"affirmDeleteListing.php?id=".$row['listing_id']."\">Delete</a></td>
				</tr>";
			}
		}
		mysqli_close($db_connection);
	?>
	</table>
	
	<!-- <div class="spacerSmall"></div>
	<h3 class="centerText"><a href="#">Remove Listings</a></h3> -->
	
	<div class="spacerSmall"></div>
</body>
</html>