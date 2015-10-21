<?php
	include "admin/scripts/db.php";
	
	$sql = "SELECT * FROM WebsiteInfo";
	
	$result = mysqli_query($db_connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			
			echo "<h1 class='centerText'>ABOUT US</h1><br/>";
			echo "<p class='centerText'>" . $row['about_us'] . "</p>";
		}
	}
	mysqli_close($db_connection);
?>


			
