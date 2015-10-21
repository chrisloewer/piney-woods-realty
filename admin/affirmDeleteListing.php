<html>
	<head>
		<title>Confirm Deletion</title>
		<!--#include virtual="include.html" -->
	</head>

	<body>
		<div class="spacerSmall"></div>
		<h3 class="centerText">Do you really want to delete the listing:
			<?php
				include "scripts/db.php";
				
				$sql = "SELECT * FROM Listings WHERE listing_id=".$_GET['id'];
				$result = mysqli_query($db_connection, $sql);
				$row = mysqli_fetch_array($result);
				echo $row['title'];
				mysqli_close($db_connection);
			?>
		?</h3>
		<form action="listings.php" method="get">
			<input class="formButton" type="submit" value="No" />
		</form>
		
		<form action=
			<?php
				echo "\"deleteListing.php?id=".$_GET['id']."\"";
			?>
		method="post">
			<input class="formButton" type="submit" value="Yes" />
		</form>
	</body>
</html>