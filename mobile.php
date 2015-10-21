<!DOCTYPE html>
<html>
<head>
	<title>Texas Piney Woods Realty</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700' rel='stylesheet' type='text/css'>
	
</head>

<body onload="loadContent()" style="min-width:600px;">
	<!--#include virtual="googleAnalytics.html" -->
	<!--#include virtual="fixedMenu.html" -->

	<div class="homeSplash" id="splash">
		<div class="splashMainText">
			<div class="splashMainTextHeader">TEXAS PINEY WOODS REALTY</div>
			A Texas Tradition<br/><br/><br/><br/>
			<a href="#listings"><img src="images/arrow4.png" width="60"></a>
		</div>
	</div>

	<!-- Initialize heigh of the main image -->
	<script type="text/javascript">
		var h = $(window).height() - 60;
		document.getElementById("splash").style.height= h + "px";
	</script>

	

	<!-- ###################################################### -->
	<!-- PAGE FOLD -->
	<!-- ###################################################### -->

	<!-- SPACER div to work out formatting kinks -->

	<div class="section" id="listings">
		<div class="containerWide">

			<!-- CONTENT -->
			<div id=featuredListingsContent></div>

			<p><br/><br/>SEE ALL LISTINGS</p>

			<!-- NAVIGATION ARROW -->
			<div class="spacerSmall"></div>
			<a href="#aboutUs"><img src="images/arrow4_b.png" width="60"></a>
		</div>
	</div>
	<hr/>


	<!-- ABOUT US -->
	<!-- <div class="pictureSection" id="PS-about"></div> -->
	<hr/>
	<div class="section" id="aboutUs">
		<div class="containerNarrow">
			<!-- NAVIGATION ARROW -->
			<a href="#listings"><img src="images/arrow4_up_b.png" width="60"></a>
			<div class="spacerSmall"></div>

			<!-- CONTENT -->
			<div id="aboutUsContent"></div>
			
			<!-- NAVIGATION ARROW -->
			<div class="spacerSmall"></div>
			<a href="#community"><img src="images/arrow4_b.png" width="60"></a>
		</div>
	</div>
	<hr/>


	<!-- ABOUT THE COMMUNITY -->
	<!-- <div class="pictureSection" id="PS-community"></div> -->	
	<hr/>


	<div class="section" id="community">
		<div class="containerNarrow">
			<!-- NAVIGATION ARROW -->
			<a href="#aboutUs"><img src="images/arrow4_up_b.png" width="60" class="arrowUp"></a>
			<div class="spacerSmall"></div>

			<!-- CONTENT -->	
			<div id="communityContent"></div>
			
			<!-- NAVIGATION ARROWS -->
			<div class="spacerSmall"></div>
			<a href="#properties"><img src="images/arrow4_b.png" width="60" class="arrowDown"></a>
		</div>
	</div>

		
	<hr/>


	<!-- OTHER PROPERTIES -->
	<!-- <div class="pictureSection" id="PS-properties"></div> -->
	<hr/>
	<div class="section" id="properties">
		<div class="container">
			<!-- NAVIGATION ARROW -->
			<a href="#community"><img src="images/arrow4_up_b.png" width="60" class="arrowUp"></a>
			<div class="spacerSmall"></div>
			
			<!-- CONTENT -->	
			<div id=otherPropertiesContent></div> 
			<p><br/>SEE ALL PROPERTIES</p>

			<!-- NAVIGATION ARROWS -->
			<div class="spacerSmall"></div>
			<a href="#runway"><img src="images/arrow4_b.png" width="60" class="arrowDown"></a>
		</div>
	</div>
	<hr/>


	<!-- ABOUT THE RUNWAY -->
	<!-- <div class="pictureSection" id="PS-runway"></div> -->
	<hr/>
	<div class="section" id="runway">
		<div class="containerNarrow">
			<!-- NAVIGATION ARROW -->
			<a href="#properties"><img src="images/arrow4_up_b.png" width="60" class="arrowUp"></a>
			<div class="spacerSmall"></div>

			<!-- CONTENT -->	
			<div id="runwayContent"></div>
			
			<!-- NAVIGATION ARROW -->
			<div class="spacerSmall"></div>
			<a href="#PS-map"><img src="images/arrow4_b.png" width="60"></a>
		</div>
	</div>
	<hr/>


	<!-- GOOGLE MAPS -->
	<!-- <iframe class = "gMap" src="https://www.google.com/maps/d/embed?mid=znIoJ_TsCerM.kYzY2tUr3mJQ"></iframe> -->
	<div class="pictureSection" id="PS-map"></div>


	<!--#include virtual="footer.html" -->
</body>
</html>

 
<script type="text/javascript">

	function loadContent() {
		makeFeaturedListings();
		makeAbout();
		makeCommunity();
		makeOtherProperties();
		makeRunway();
	}
	function makeFeaturedListings() {
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}
		else {
			xmlhttp = new ActiveObject('Microsoft.XMLHTTP');
		}
		xmlhttp.open('GET','featuredListings.php',false);
		xmlhttp.send(null);
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById('featuredListingsContent').innerHTML = xmlhttp.responseText;
		}
	}
	function makeAbout() {
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}
		else {
			xmlhttp = new ActiveObject('Microsoft.XMLHTTP');
		}
		xmlhttp.open('GET','about.php',false);
		xmlhttp.send(null);
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById('aboutUsContent').innerHTML = xmlhttp.responseText;
		}
	}
	function makeCommunity() {
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}
		else {
			xmlhttp = new ActiveObject('Microsoft.XMLHTTP');
		}
		xmlhttp.open('GET','community.php',false);
		xmlhttp.send(null);
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById('communityContent').innerHTML = xmlhttp.responseText;
		}
	}
	function makeOtherProperties() {
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}
		else {
			xmlhttp = new ActiveObject('Microsoft.XMLHTTP');
		}
		xmlhttp.open('GET','otherProperties.php',false);
		xmlhttp.send(null);
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById('otherPropertiesContent').innerHTML = xmlhttp.responseText;
		}
	}
	function makeRunway() {
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}
		else {
			xmlhttp = new ActiveObject('Microsoft.XMLHTTP');
		}
		xmlhttp.open('GET','runway.php',false);
		xmlhttp.send(null);
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById('runwayContent').innerHTML = xmlhttp.responseText;
		}
	}

	//essentials from indexJS

	var w = document.getElementById("runway").offsetWidth;
	document.getElementById("myFooter").style.width= w + "px";
	document.getElementById("mainMenuBar").style.width= w + "px";

	$(window).resize(function(){
		/*var menuHeight = document.getElementById('mainMenuBar').offsetHeight;*/
		var h = $(window).height() - 60;
		document.getElementById("splash").style.height= h + "px";

		var w = $(window).width;
		document.getElementById("myFooter").style.width= w + "px";
	});

	var image = new Image();
	image.src = "images/homeSplash/fall_road.jpg";
	image.onload = function() {
		var mySplash = document.getElementById("splash");
		mySplash.style.background = "url(" + image.src + ") no-repeat center center";
		mySplash.style.backgroundSize = "cover";
	}
</script>

