<!DOCTYPE HTML>

<html>
	<head>
		<title>Add Listing</title>
		<script type="text/javascript" src="scripts/checklisting.js"></script>
		<!--#include virtual="include.html" -->
		<?php include "scripts/checkSession.php" ?>
	</head>
	
	<body>

	<!--#include virtual="fixedMenu.html" -->
	<div class="containerNarrow">

		<form id="addListingForm" action="scripts/addlisting.php" method="post" onsubmit="return validateAddListing()">
			<h1>Add Listing</h1>
				<legend>Basic Information</legend>
						<label for="title">Title: </label>
						<input type="text" name="title" size="40" />
					
						<label for="class">Class: </label>
						<select name="class">
								<option>Residential</option>
								<option>Lake Front</option>
								<option>Commercial</option>
								<option>Farm and Ranch</option>
						</select>
						
					
						<label=for="keyFeatures">Key Features: </label>
						<textarea name="keyFeatures" rows="5" cols="41"></textarea>
					
						<label=for="description">Description: </label>
						<textarea name="description" rows="8" cols="41"></textarea>
					
						<label for="mls">MLS Listing #: </label>
						<input type="text" name="mls" size="40" />
				
			
				<legend>Quick Facts</legend>
					
						<label for="acreage">Acreage: </label></td>
						<input type="text" name="acreage" size="8" />
					
						<label for="houseFootage">House SqFt: </label>
						<input type="text" name="houseFootage" size="8" />
					
						<label for="bedrooms">Bedrooms: </label>
						<input type="text" name="bedrooms" size="8" />

						<label for="bathrooms">Bathrooms: </label>
						<input type="text" name="bathrooms" size="8" />

						<label for="price">Asking price: </label>
						<input type="text" name="price" size="8" />
					
			
				<legend>Address</legend>
				
				
						<label for="street1">Street 1: </label>
						<input type="text" name="street1" size="16" />
						
						<label for="street2">Street 2: </label>
						<input type="text" name="street2" size="16" />
					
						<label for="city">City: </label>
						<input type="text" name="city" size="16" />
					
						<label for="state">State: </label>
						<input type="text" name="state" size="16" value="TX"/>
					
						<label for="zipcode">Zip Code: </label></td>
						<input type="text" name="zipcode" size="16" />

				<div class="spacerSmall"></div>
				<input type="submit" value="Submit Listing" /></td>
				<div class="spacerTiny"></div>
				<td><input type="reset" value="Reset Form" /></td>
				
				<div class="spacer"></div>
		</form>

	</div>
	</body>
</html>