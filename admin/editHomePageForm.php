<!DOCTYPE HTML>

<html>
	<head>
		<title>Edit Home Page</title>
		<!--#include virtual="include.html" -->
		<?php include "scripts/checkSession.php" ?>
	</head>
	
	<body>
	
	<!--#include virtual="fixedMenu.html" -->
<p class="centerText"><a href="index.php">Return to Admin Page</a><p>
	<div class="containerNarrow">

		<h1>Edit Home Page</h1>
		
		<form id="editHomePage" action="scripts/editHomePage.php" method="post">
			<?php
				include 'scripts/db.php';
				$query = "SELECT * FROM WebsiteInfo";
				
				$result = mysqli_query($db_connection, $query);				
				
				$info = mysqli_fetch_array($result);
				
				$query = "SELECT * FROM Listings";
				
				$listings = mysqli_query($db_connection, $query);				
				echo "<legend>Featured Listing 1</legend>
					<select name=\"featured1\">";
					for ($i = 0; $i < mysqli_num_rows($listings); $i++) {
						$row = mysqli_fetch_array($listings);
						echo "<option value=\"".$row['listing_id']."\"";
						if ($row['listing_id'] == $info['featured_listing_1']) {
							echo " selected=\"selected\"";
						}
						echo ">".$row['title']."</option>";
					}
					
				echo "</select>
					";
				
				
				$listings = mysqli_query($db_connection, $query);				
				echo "<legend>Featured Listing 2</legend>
					<select name=\"featured2\">";
					for ($i = 0; $i < mysqli_num_rows($listings); $i++) {
						$row = mysqli_fetch_array($listings);
						echo "<option value=\"".$row['listing_id']."\"";
						if (intval($row['listing_id']) == intval($info['featured_listing_2'])) {
							echo " selected=\"selected\"";
						}
						echo ">".$row['title']."</option>";
					}
					
				echo "</select>
					";
					
				echo "<legend>About Us</legend>
						<textarea name=\"aboutUs\" rows=\"8\" cols=\"41\">".$info['about_us']."</textarea>";
				
				echo "<legend>Community</legend>
						<textarea name=\"community\" rows=\"8\" cols=\"41\">".$info['our_community']."</textarea>";
						
				$listings = mysqli_query($db_connection, $query);				
				echo "<legend>Other Properties 1</legend>
					<select name=\"other1\">";
					for ($i = 0; $i < mysqli_num_rows($listings); $i++) {
						$row = mysqli_fetch_array($listings);
						echo "<option value=\"".$row['listing_id']."\"";
						if (intval($row['listing_id']) == intval($info['other_properties_1'])) {
							echo " selected=\"selected\"";
						}
						echo ">".$row['title']."</option>";
					}
					
				echo "</select>
					";
					
				$listings = mysqli_query($db_connection, $query);
				echo "<legend>Other Properties 2</legend>
					<select name=\"other2\">";
					for ($i = 0; $i < mysqli_num_rows($listings); $i++) {
						$row = mysqli_fetch_array($listings);
						echo "<option value=\"".$row['listing_id']."\"";
						if (intval($row['listing_id']) == intval($info['other_properties_2'])) {
							echo " selected=\"selected\"";
						}
						echo ">".$row['title']."</option>";
					}
					
				echo "</select>
					";
				
				echo "<legend>Runway Access</legend>
						<textarea name=\"runwayAccess\" rows=\"8\" cols=\"41\">".$info['runway_access']."</textarea>";
				
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