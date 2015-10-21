<?php
	$q = intval($_GET['q']);
	
	include "admin/scripts/db.php";
	
	$sql = "SELECT * FROM Listings ORDER BY listing_id DESC";
	
	$result = mysqli_query($db_connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
		
			echo "<hr class='listing'>";
			echo "<!--LISTING -->

				<h2 class='centerText' id='listing$row[listing_id]'>" . $row['title'] . "</h2>
				<div class='spacerTiny'></div>
				<div class='grid'>
					<div class='col-1-3'>
						<div class='gallerySmallContainer'>
							<div class='listingsImgPH' id='pic" . $row['listing_id'] . "' style='background-image: url(\"images/listings/" . $row['listing_id'] . "/0.jpg\")'></div><br/>
							<!--to do: Scan folder to find list of all pictures-->";
							$picIndex = 0;
							while (file_exists("images/listings/" . $row['listing_id'] . "/$picIndex.jpg")) {
								echo "<div class='listImgSmall' style='background-image: url(\"images/listings/" . $row['listing_id'] . "/$picIndex.jpg\")' onclick='selectPic(\"pic" . $row['listing_id'] . "\", this)'></div>";
								$picIndex++;
							}
					$location = $row['street1'] . " " . $row['street2'] . " ," . $row['city'] . " ," . $row['state'] . ", " . $row['zip'];
					$location = str_replace(" ","%20",$location);
					$location = str_replace(",","%2C",$location);
					$address = "https://www.google.com/maps/place/" . $location;
						echo "</div>
					</div>

					<div class='col-listing-r'>
						<h4>Location:</h4>"
						. $row['street1'] . "<br />";
						if ($row['street2'] != null && $row['street2'] != "") {
							echo $row['street2'] . "<br />";
						}
						echo $row['city'] . ", " . $row['state'] . " " . $row['zip_code'] . "<br />
						<a href='$address' target='_blank'>Get Directions</a>
						<h4>Listing Number:</h4>"
						. $row['mls_num'] . "
						<h4>Price</h4>
						$" . $row['price'] . "
						<h4>Bedrooms:</h4>"
						. $row['bedrooms'] . "
						<h4>Baths:</h4> "
						. $row['bathrooms'] . "
						<h4>Square Footage:</h4> "
						. $row['house_sqft'] . "
						<h4>Acres:</h4> "
						. $row['acreage'] . "
					</div>
					<div class='col-listing'>
						<h4>Key Features:</h4>"
						. $row['key_features'] . "
						<h4>Description:</h4>"
						. $row['description'] . "
					</div>

				</div>";
		}
	}
	mysqli_close($db_connection);
?>

<script type="text/javascript">
	function selectPic (bigPic, smallPic) {
		var source = smallPic.src;
		document.getElementById(bigPic).src = source;
	}
</script>