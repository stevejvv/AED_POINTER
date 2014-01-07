<?php 
if($_POST['type1']== 3) {
	$realName = $_POST['name1'];
}
else {
	$realName = $_POST['name0'];
}

// retrieve file
$fileTmpLoc = $_FILES["logo"]["tmp_name"]; // File in the PHP tmp folder

// retrieve name for the file
$fileName = $_FILES["logo"]["name"]; // The file name

// change name
$image_name;

$kaboom = explode(".", $fileName); // Split file name into an array using the dot
$fileExt = end($kaboom); // Now target the last array element to get the file extension
$image_underscore_name = $realName;
$image_underscore_name = 'logo_'.str_replace(' ', '_', $image_underscore_name).'_'.mt_rand(0,10000);
$image_name = $image_underscore_name.'.'.$fileExt;

// upload file
$moveResult = move_uploaded_file($fileTmpLoc, "uploads/$image_name");

$hidden_logo = '<input type="hidden"  name="logo_name" value="'.$image_name.'">';



?>