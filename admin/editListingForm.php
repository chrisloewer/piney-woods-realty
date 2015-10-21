<!DOCTYPE HTML>

<html>
	<head>
		<title>Edit Listing</title>
		<script type="text/javascript" src="scripts/checklisting.js"></script>
		<!--#include virtual="include.html" -->
		<?php include "scripts/checkSession.php" ?>
	</head>
	
	<body>
	
	<!--#include virtual="fixedMenu.html" -->
	<div class="containerNarrow">

		<h1>Edit Listing</h1>
		
		<form id="addListingForm" action=
		<?php
			echo "\"scripts/editlisting.php?id={$_GET['id']}\" "; 
		?>
		method="post" onsubmit="return validateAddListing()">
			<?php 
			include 'scripts/db.php';
			$listingId = stripcslashes($_GET['id']);
			$query = "SELECT * FROM Listings WHERE listing_id=".$listingId;
			
			$result = mysqli_query($db_connection, $query);				
			
			$listing = mysqli_fetch_array($result);
			
			echo "
			
				<legend>Basic Information</legend>
				
						<label for=\"title\">Title: </label>
						<input type=\"text\" name=\"title\" size=\"40\" value=\"".$listing['title']."\"/>
					
					
						<label for=\"class\">Class: </label>
						<select name=\"class\">
								<option";
			if(strcmp($listing['class'], "Residential") == 0){
				echo " selected=\"selected\"";
				}
			echo 
								">Residential</option>
								<option";
			if(strcmp($listing['class'], "Lake Front") == 0){
				echo " selected=\"selected\"";
				}
			echo 
								">Lake Front</option>
								<option";
			if(strcmp($listing['class'], "Commercial") == 0){
				echo " selected=\"selected\"";
				}
			echo 
								">Commercial</option>
								<option";
			if(strcmp($listing['class'], "Farm and Ranch") == 0){
				echo " selected=\"selected\"";
				}
			echo 
								">Farm and Ranch</option>
							</select>
						
					
					
						<label=for=\"keyFeatures\">Key Features: </label>
						<textarea name=\"keyFeatures\" rows=\"5\" cols=\"41\">".$listing['key_features']."</textarea>
					
					
						<label=for=\"description\">Description: </label>
						<textarea name=\"description\" rows=\"8\" cols=\"41\">".$listing['description']."</textarea>
					
					
						<label for=\"mls\">MLS Listing #: </label>
						<input type=\"text\" name=\"mls\" size=\"40\"  value=\"".$listing['mls_num']."\"/>
					
				</table>
			
			
			
				<legend>Quick Facts</legend>
				
					
						<label for=\"acreage\">Acreage: </label>
						<input type=\"text\" name=\"acreage\" size=\"8\" value=\"".$listing['acreage']."\" />
					
					
						<label for=\"houseFootage\">House SqFt: </label>
						<input type=\"text\" name=\"houseFootage\" size=\"8\" value=\"".$listing['house_sqft']."\" />
					
					
						<label for=\"bedrooms\">Bedrooms: </label>
						<input type=\"text\" name=\"bedrooms\" size=\"8\" value=\"".$listing['bedrooms']."\" />
					
					
						<label for=\"bathrooms\">Bathrooms: </label>
						<input type=\"text\" name=\"bathrooms\" size=\"8\" value=\"".$listing['bathrooms']."\" />
					
					
						<label for=\"price\">Asking price: </label>
						<input type=\"text\" name=\"price\" size=\"8\" value=\"".$listing['price']."\" />
				
			
			
			
				<legend>Address</legend>
				
					
						<label for=\"street1\">Street 1: </label>
						<input type=\"text\" name=\"street1\" size=\"16\" value=\"".$listing['street1']."\" />
						
						<label for=\"street2\">Street 2: </label>
						<input type=\"text\" name=\"street2\" size=\"16\" value=\"".$listing['street2']."\" />
					
						<label for=\"city\">City: </label>
						<input type=\"text\" name=\"city\" size=\"16\" value=\"".$listing['city']."\" />
					
					
						<label for=\"state\">State: </label>
						<input type=\"text\" name=\"state\" size=\"16\" value=\"".$listing['state']."\" />
					
					
						<label for=\"zipcode\">Zip Code: </label>
						<input type=\"text\" name=\"zipcode\" size=\"16\"";
			if($listing['zip_code'] != 0) {
				echo "value=\"".$listing['zip_code']."\"";
			}
			
			echo 		
						"/>
			
			
			
			
				<legend></legend>
			";
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