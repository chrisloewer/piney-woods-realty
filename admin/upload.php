<?php
$targetDir = "../images/listings/".$_GET['id']."/";

// Check if folder exists
if(!file_exists($targetDir)) {
	mkdir($targetDir, 0777);
}

$fileCount =  count (glob($targetDir."*.jpg"));
$fileName = $fileCount.".jpg";

while(file_exists($targetDir.$fileName)) {
	$fileCount++;
	$fileName = $fileCount.".jpg";
}

$targetFile = $targetDir . basename($fileName);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
	header("Location: editPictures.php?id=".$_GET['id']);
} 
else {
	echo "Sorry, there was an error uploading your picture.";
}
?>