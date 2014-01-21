<?php 

$logo_name = $_POST['logo_name'];
$str2 = substr($logo_name, 5);
// retrieve file
$fileTmpLoc = $_FILES["img"]["tmp_name"]; // File in the PHP tmp folder

if($fileTmpLoc != null){
	// retrieve name for the file
	$fileName = $_FILES["img"]["name"]; // The file name

	// change name
	$image_name;

	$kaboom = explode(".", $fileName); // Split file name into an array using the dot
	$fileExt = end($kaboom); // Now target the last array element to get the file extension
	$image_underscore_name = $name;
	$image_underscore_name = str_replace(' ', '_', $image_underscore_name).'_'.mt_rand(0,10000);
	$image_name = $image_underscore_name.'.'.$fileExt;

	// upload file
	$moveResult = move_uploaded_file($fileTmpLoc, "image_database/$str2");	  
}


copy("uploads/$logo_name","image_database/$logo_name");
unlink("uploads/$logo_name");




















?>