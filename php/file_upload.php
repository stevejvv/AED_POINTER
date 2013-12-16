<?php 

// retrieve file
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"]; // File in the PHP tmp folder

// retrieve name for the file
$fileName = $_FILES["uploaded_file"]["name"]; // The file name

// change name
$image_name;


$kaboom = explode(".", $fileName); // Split file name into an array using the dot
$fileExt = end($kaboom); // Now target the last array element to get the file extension
$image_underscore_name = $name;
$image_underscore_name = str_replace(' ', '_', $image_underscore_name);
$image_name = $image_underscore_name.'.'.$fileExt;

// upload file
$moveResult = move_uploaded_file($fileTmpLoc, "uploads/$image_name");









	function show_error($error_code, $source_path, $target_path)
    {

        // if there was an error, let's see what the error is about
        switch ($error_code) {

            case 1:
                echo 'Source file "' . $source_path . '" could not be found!';
                break;
            case 2:
                echo 'Source file "' . $source_path . '" is not readable!';
                break;
            case 3:
                echo 'Could not write target file "' . $source_path . '"!';
                break;
            case 4:
                echo $source_path . '" is an unsupported source file format!';
                break;
            case 5:
                echo $target_path . '" is an unsupported target file format!';
                break;
            case 6:
                echo 'GD library version does not support target file format!';
                break;
            case 7:
                echo 'GD library is not installed!';
                break;
            case 8:
                echo '"chmod" command is disabled via configuration!';
                break;
        }
    }

    // include the class
    require 'php/Zebra_Image.php';

    // create a new instance of the class
    $image = new Zebra_Image();

    // indicate a source image
    $image->source_path = "uploads/$image_name";

    /**
     *
     *  THERE'S NO NEED TO EDIT BEYOUND THIS POINT
     *
     */

    $ext = 'jpeg';

    // indicate a target image
    $image->target_path = "results/$image_underscore_name." . $ext;

    // resize
    // and if there is an error, show the error message
    if (!$image->resize(400, 400, ZEBRA_IMAGE_BOXED, -1)) show_error($image->error, $image->source_path, $image->target_path);

    // from this moment on, work on the resized image
    $image->source_path = 'results/resize.' . $ext;

    unlink("uploads/$image_name");
	
	
	?>