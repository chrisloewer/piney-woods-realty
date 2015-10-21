<?php
	include "admin/scripts/db.php";
	
	$sql = "SELECT * FROM WebsiteInfo";
	
	$result = mysqli_query($db_connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			
			echo $row['bio'];
		}
	}
	mysqli_close($db_connection);
?>