<?php
	include "admin/scripts/db.php";
	
	$sql = "SELECT featured_listing_1, featured_listing_2 FROM WebsiteInfo";
	
	$result = mysqli_query($db_connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			$listing1 = $row['featured_listing_1'];
			$listing2 = $row['featured_listing_2'];
		}
	}
	
	$sql = "SELECT listing_id, title, description FROM Listings WHERE listing_id = " . $listing1 . " OR listing_id = " . $listing2;
	$result = mysqli_query($db_connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			if ($row['listing_id'] == $listing1) {
				$listing1Title = $row['title'];
				$listing1Description = $row['description'];
			}
			else {
				$listing2Title = $row['title'];
				$listing2Description = $row['description'];
			}
		}
	}
	
	echo "<h1 class='centerText'>FEATURED LISTINGS</h1>";
	
	echo "<!-- Listings in 2 columns -->";
	echo "<div class='grid' id='featuredListing_grid'>";
	echo "	<div class='col-1-2'>";
	echo "		<a href='listings.html#listing$listing1'><div class='listingsImgPH' style='background-image: url(\"images/listings/" . $listing1 . "/0.jpg\")'></div></a>";
	echo "		<a href='listings.html#listing$listing1'><h2 class='centerText'>$listing1Title</h2></a>";
	echo "		<p class='centerText'>$listing1Description</p>";
	echo "	</div>";
	echo "	<div class='col-1-2-r'>";
	echo "		<a href='listings.html#listing$listing2'><div class='listingsImgPH' style='background-image: url(\"images/listings/" . $listing2 . "/0.jpg\")'></div></a>";
	echo "		<a href='listings.html#listing$listing2'><h2 class='centerText'>$listing2Title</h2></a>";
	echo "		<p class='centerText'>$listing2Description</p>";
	echo "	</div>";
	echo "</div>";
	
	
	echo "<!-- SWITCH TO ONE COLUMN -->";
	echo "<div id='featuredListing_noGrid'>";
	echo "		<a href='listings.html#listing$listing1'><div class='listingsImgPH' style='background-image: url(\"images/listings/" . $listing1 . "/0.jpg\")'></div></a>";
	echo "		<a href='listings.html#listing$listing1'><h2 class='centerText'>$listing1Title</h2></a>";
	echo "		<p class='centerText'>$listing1Description</p>";
	echo "</div>";
	
	mysqli_close($db_connection);
?>