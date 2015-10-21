<?php
    //db.php
    $db_location = "localhost";
    $db_database = "texaspin_eywoods";
    $db_password = "MotorcycleLady4!";
    $db_username = "texaspin";
    $db_connection = mysqli_connect("$db_location","$db_username","$db_password")
		or die ("Error - Could not connect to $db_location Server");
    $db = mysqli_select_db($db_connection,$db_database)
		or die ("Error - Could not open database: $db_database");
?>