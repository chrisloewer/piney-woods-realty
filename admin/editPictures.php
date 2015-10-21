<html>
<head>
	<title>Edit Pictures</title>
	<!--#include virtual="include.html" -->

</head>

<body>

<!--#include virtual="fixedMenu.html" -->
<div class="containerWide">

<form action="upload.php?id=
	<?php
		echo $_GET['id'];
	?>
	" method="post" enctype="multipart/form-data">


	<div class="spacerSmall"></div>

	<h3 class="centerText">Select image to upload:</h3>
			
	<input type="file" name="fileToUpload" id="fileToUpload" class="formButton">
	<input type="submit" value="Upload Image" name="submit" class="formButton">


	<table class="editListingTable">
		
		<?php
			$count = 0;
			echo "<tr>";
				foreach (scandir("../images/listings/".$_GET['id']) as $file) {
					if ('.' === $file) continue;
					if ('..' === $file) continue;
					echo "<td align=\"center\">";
					echo "<img src='../images/listings/".$_GET['id']."/".$file."' width='300' height='250'>";
					echo "<br />";
					echo "<a href=\"deletePicture.php?id=".$_GET['id']."&pic=".$file."\">Delete</a>";
					echo "<br />";
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