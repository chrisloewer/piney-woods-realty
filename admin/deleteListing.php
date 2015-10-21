<?php
include "scripts/db.php";

// Delete listing from database
$sql = "DELETE FROM Listings WHERE listing_id=".$_GET['id'];
mysqli_query($db_connection, $sql);
mysqli_close($db_connection);
/*
// Remove images folder
$files = glob("../images/listings/".$_GET['id']);
foreach($files as $file){
  if(is_file($file))
    unlink($file);
}
rmdir("../images/listings/".$_GET['id']);
*/
header("Location: listings.php");
?>