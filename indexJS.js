//resize Main Splash
$(window).resize(function(){
	/*var menuHeight = document.getElementById('mainMenuBar').offsetHeight;*/
	var h = $(window).height() - 60;
	document.getElementById("splash").style.height= h + "px";

	//resize image separator section height to screen size
	$( '.pictureSection' ).each(function(){
		var $picSec = $(this);
		$picSec.css({'height':($(window).height()*0.95)+'px'});
	});
});

//set image separator section height to screen size
$(document).ready(function(){
	$( '.pictureSection' ).each(function(){
		var $picSec = $(this);
		$picSec.css({'height':($(window).height()*0.95)+'px'});
	});
});


/*var pics = ["images/homeSplash/fall_road.jpg", "images/homeSplash/squirrel.jpg", "images/homeSplash/feeder.jpg",
	"images/homeSplash/fall_leaf.jpg", "images/homeSplash/foggy_road.jpg", "images/homeSplash/spring_flowers.jpg"];*/
var pics = [];

var i = 0;
var month = new Date().getMonth();

//Set pictures for home slideshow based on season
if (month < 3 || month == 11){
	//WINTER
	pics = ["images/homeSplash/foggy_road.jpg", "images/homeSplash/feeder.jpg",
	"images/homeSplash/star.jpg"];
}
else if (month < 5){
	//SPRING
	pics = ["images/homeSplash/spring_flowers.jpg", "images/homeSplash/pine_buds.jpg",
	"images/homeSplash/red_flower.jpg"];
}
else if (month < 8){
	//SUMMER
	pics = ["images/homeSplash/rainbow.jpg", "images/homeSplash/dock2.jpg", "images/homeSplash/lake_sunny.jpg"];
}
else{
	//FALL
	pics = ["images/homeSplash/fall_leaf.jpg", "images/homeSplash/squirrel.jpg", "images/homeSplash/feeder.jpg",
	"images/homeSplash/fall_yellow.jpg", "images/homeSplash/fall_road.jpg"];
}

//homeSplash slideshow
slideShow();
var setTimer = setInterval(function(){slideShow()}, 6000);

function slideShow(){
	//preload image to avoid white flash
	var len = pics.length;
	var image = new Image();
	image.src = pics[i%len];
	image.onload = function() {
		var mySplash = document.getElementById("splash");
		mySplash.style.background = "url(" + image.src + ") no-repeat center center";
		mySplash.style.backgroundSize = "cover";
	}
	i++;
}

//Change image - use to recolor logo on hover
function colorImage(x, s){
	x.src=s;
}