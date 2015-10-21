<?php
	include "admin/scripts/db.php";
	
	$sql = "SELECT other_properties_1, other_properties_2 FROM WebsiteInfo";
	
	$result = mysqli_query($db_connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			echo "<h1 class='centerText'>OTHER PROPERTIES</h1><br/>";
			echo "<a href='listings.html#listing" . $row['other_properties_1'] . "'><div class='otherPropPH' style='background-image: url(\"images/listings/" . $row['other_properties_1'] . "/0.jpg\")'></div></a>";
			echo "<a href='listings.html#listing" . $row['other_properties_2'] . "'><div class='otherPropPH-r' style='background-image: url(\"images/listings/" . $row['other_properties_2'] . "/0.jpg\")'></div></a><br />";
		}
	}
	mysqli_close($db_connection);
?>