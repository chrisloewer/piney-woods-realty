<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<!--#include virtual="include.html" -->
	<?php include "scripts/checkSession.php" ?>
</head>
<body>
	
<!--#include virtual="fixedMenu.html" -->


	<div class="spacerSmall"></div>
	<h1 class="centerText">ADMIN HOME PAGE</h1>
	<!-- <p class="centerText"><a href="logout.php" >Log Out</a></p> -->
	<div class="spacer"></div>

	<h3 class="centerText"><a href="editHomePageForm.php">Edit HOME Page</a></h3>
	<div class="spacerSmall"></div>
	<h3 class="centerText"><a href="editAboutPageForm.php">Edit ABOUT Page</a></h3>
	<div class="spacerSmall"></div>
	<h3 class="centerText"><a href="editPictures.php?id=gallery">Edit GALLERY</a></h3>
	<div class="spacerSmall"></div>
	<h3 class="centerText"><a href="listings.php">Edit LISTINGS</a></h3>
	<div class="spacerSmall"></div>
	<h3 class="centerText"><a href="editContactPageForm.php">Edit CONTACT US Page</a></h3>
	<div class="spacerSmall"></div>
</body>
</html>
