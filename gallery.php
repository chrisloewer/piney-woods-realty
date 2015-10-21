<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<!--#include virtual="include.html" -->

	<!-- Style Overide -->
	<style type="text/css">
	[class*='container']{
			display: block;
		}
	</style>
</head>
<body  onload="loadPics();">
<div id="bodyContainer">
	
<!--#include virtual="fixedMenu.html" -->


<div id="bodyContent">
	<!--#include virtual="googleAnalytics.html" -->

	<div class="spacerSmall"></div>
	<h1 class="centerText">PHOTO GALLERY</h1>
	<div class="spacerSmall"></div>

	<div class="containerWide" style="text-align:center">
			<?php
				$imageUrls = array();
				foreach (scandir("images/listings/gallery") as $file) {
					if ('.' === $file) continue;
					if ('..' === $file) continue;

					$imageUrlsPHP[] = "images/listings/gallery/".$file;
				}
				$numImages = count($imageUrlsPHP);
				for($i = 0; $i < $numImages; $i++) {

					echo "<div class=\"galleryImgPH\" id=\"pic".$i."\"></div>";

				}
			?>
	</div>

</div> <!-- End #bodyContent -->

<div id="footerContainer">
	<!--#include virtual="footer.html" -->
</div>


</div>
</body>
</html>

<script>
	function loadPics() {
		var imageUrlsJS = <?php echo json_encode($imageUrlsPHP); ?>;
		for(i = 0; i < imageUrlsJS.length; i++) {
			var pic = document.getElementById("pic"+i);
			pic.style.backgroundImage = "url('" + imageUrlsJS[i] + "')";
		}
	}
</script>