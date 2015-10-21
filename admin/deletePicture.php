<?php
unlink("../images/listings/".$_GET['id']."/".$_GET['pic']);

$picIndex = $_GET['pic'];
$picIndex = substr($picIndex, 0, (strlen - 4));
$picIndex += 1;
$path = "../images/listings/" . $_GET['id'] . "/";
while (file_exists($path . $picIndex  . ".jpg")) {
	//Rename picture
	$oldName = $picIndex . ".jpg";
	$newName = ($picIndex - 1) . ".jpg";
	rename($path . $oldName, $path . $newName);
	$picIndex++;
}
header("Location: editPictures.php?id=".$_GET['id']);
?>