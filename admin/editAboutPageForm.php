<html>
<head>
	<title>Edit About Page</title>
	<!--#include virtual="include.html" -->

</head>

<body>

<!--#include virtual="fixedMenu.html" -->
<p class="centerText"><a href="index.php">Return to Admin Page</a><p>
<div class="containerWide">
<div class="containerNarrow">
<form action="scripts/editAboutPage.php" method="post" enctype="multipart/form-data">
	<div class="spacerSmall"></div>
	<h3 class="centerText">Bio</h3>
	<?php
	include 'scripts/db.php';
		$query = "SELECT * FROM WebsiteInfo";
				
		$result = mysqli_query($db_connection, $query);				
				
		$info = mysqli_fetch_array($result);
	
	echo "<textarea name=\"bio\" rows=\"10\" cols=\"41\">".str_replace("<br />", "\n", $info['bio'])."</textarea>";
	?>
	<div class="spacerSmall"></div>
	<input type="submit" value="Submit Changes to Bio" name="submit" class="formButton">
</form>
</div>
<form action="uploadAboutPicture.php" method="post" enctype="multipart/form-data">
	<div class="spacerSmall"></div>

	<h3 class="centerText">Select image to upload:</h3>
			
	<input type="file" name="fileToUpload" id="fileToUpload" class="formButton">
	<input type="submit" value="Upload Image" name="submit" class="formButton">


	<table class="editListingTable">
		
		<?php
			$count = 0;
			echo "<tr>";
				foreach (scandir("../images/aboutUs/") as $file) {
					if ('.' === $file) continue;
					if ('..' === $file) continue;
					echo "<td align=\"center\">";
					echo "<img src='../images/aboutUs/"."/".$file."' width='300' height='250'>";
					echo "<br />";
					echo "</td>";
					$count++;
					if ($count % 3 == 0) {
						echo "</tr>";
						echo "<tr>";
					}
				}
			echo "</tr>";
		?>
	</table>
		
</form>

</div>
</body>
</html>