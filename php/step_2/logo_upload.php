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




// include the class
   require 'php/Zebra_Image.php';

   // create a new instance of the class
   $image = new Zebra_Image();

   // indicate a source image
   $image->source_path = "uploads/$image_name";


// some additional properties that can be set
    // read about them in the documentation
    $image->preserve_aspect_ratio = true;
    $image->enlarge_smaller_images = false;

   /**
    *
    *  THERE'S NO NEED TO EDIT BEYOUND THIS POINT
    *
    */

   $ext = 'jpg';

   // indicate a target image
   $theName = $image_underscore_name.".".$ext;
   $image->target_path = "uploads/$image_underscore_name." .$ext;

   // resize
   // and if there is an error, show the error message
   if (!$image->resize(400, 400, ZEBRA_IMAGE_BOXED, -1));

	$hidden_logo = '<input type="hidden"  name="logo_name" value="'.$theName.'">';
   
	//unlink("uploads/$image_name");
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>