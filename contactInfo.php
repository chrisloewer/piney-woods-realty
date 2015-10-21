<?php
	include "admin/scripts/db.php";
	
	$sql = "SELECT * FROM ContactUs";
	
	$result = mysqli_query($db_connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
		
			echo "<h3>Address</h3>";
			echo $row['street1'] . "<br />";
			if ($row['street2' != null && $row['street2'] != ""]) {
				echo $row['street2'] . "<br />";
			}
			echo $row['city'] . ", " . $row['state'] . "<br />";
			echo $row['zip_code'] .	"<br />";
			echo "<h3>Email</h3>";
			echo "<a href=\"mailto:" . $row['email'] . "\">" . $row['email'] . "</a><br />";
			echo "<h3>Phone Number</h3>";
			echo $row['phone'] . "<br />";
			echo "<h3>Office Hours</h3>";
			echo $row['office_hours'];
		}
	}
	mysqli_close($db_connection);
?>