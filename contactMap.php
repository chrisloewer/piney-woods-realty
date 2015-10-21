<?php
	include "admin/scripts/db.php";
	
	$sql = "SELECT * FROM ContactUs";
	
	$result = mysqli_query($db_connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			
			$address = $row['street1'] . " " . $row['street2'] . " ," . $row['city'] . " ," . $row['state'] . ", United States";
			$address = str_replace(" ","%20",$address);
			$address = str_replace(",","%2C",$address);
			//hardcoding address here, remove the next line if you'd like this to be dynamic
			$address="32.8889972,-94.610247";
			$reqAddress = "https://www.google.com/maps/embed/v1/place?q=$address&key=AIzaSyB_GdasvbJGKRVJ-dYdbPcmECOTQJ825aA";
			


			echo "<iframe class='contactMap' frameborder='0' style='border:0'" .
				"src='$reqAddress'>" .
			"</iframe>";
		}
	}
	mysqli_close($db_connection);
?>


			