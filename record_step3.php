<?php 
if ($_POST['type1'] == 0 or $_POST['type1'] == 1 or $_POST['type1'] == 2) {
	include 'php/step_3/type1_0.php';
}
else  {	 	
	include 'php/step_3/type1_3_0.php';						
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirm</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="icon" type="image/png" href="images/pointer.png">
	
	<link rel="stylesheet" href="lib/css/css_reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="lib/css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
	
	<link rel="stylesheet" href="css/index_main.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/record_step1.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/record_step3.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="lib/js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>


</head>
<body>
	
	<?php include 'php/header.php';?>
	
	<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="#">CARTE</a></li>
			<li><a href="add_aed.html">AJOUTER UN DEA</a></li>
			<li><a href="#">LIENS</a></li>
			<li><a href="#">APPLICATION</a></li>
			<li><a href="#">EN SAVOIR +</a></li>
		</ul>
	</nav>
	<div id="topSpaceContainer"></div>
	<div id="msform">
		<ul id="progressbar">
			<li class="active">Personal information</li>
			<li class="active">information on the AED</li>
			<li class="active">Confirmation</li>
		</ul>
	</div>
	
	<?php include 'php/step_3/file_upload.php'; ?> 

	
	<div id="alert_submit"><span>Note</span>: You need to press the validate button at the bottom of the page in order to submit your application
	</div>
	
	<div id="confirmBodyContainer" style="display:none">
		<img id="thumbnail" src="image_database/<?php echo "$image_underscore_name.jpg" ?>" >		
		
		<div id="step_3_basic_info_container">
			<div id="step_3_basic_info_company"><?php echo $company; ?></div>
			<div id="step_3_basic_info_name"><?php echo $name; ?></div>
			<div id="step_3_basic_info_phone"><span>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><?php echo $phone; ?></div>
			<div id="step_3_basic_info_email"><span>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><?php echo $email; ?></div>
			<div id="step_3_basic_info_address"><span>Address:&nbsp; </span><?php echo $homeAddress; ?></div>
		</div>

		<div id="step_3_aed_address_container">
			<div id="result_address"><br /><span>Address of the AED</span><br /><br /><?php echo $fullAddress; ?><br /><br />Lat: <?php echo $Lat; ?><br />Lng: <?php echo $Lng; ?></div>
			<div id="result_map">
				<div id="map-canvas"></div>
			</div>
		</div>


		<div id="step_3_basic_info_description">
			<span>Description: <br /></span><?php echo $description; ?>
		</div>
		
		<div id="step_3_availability_info_container">
			<div id="step_3_availability_info_title">AVAILABILITY OF THE AED</div>
			<div id="step_3_availability_info_times"><?php echo $times_output; ?></div>
			<div id="step_3_availability_info_lunch"><span>   Opened during lunch time:&nbsp;&nbsp;&nbsp; </span><?php echo $lunchTime; ?></div>
			<div id="step_3_availability_info_holidays"><span>Opened during the holidays: </span><?php echo $bankHolidays; ?></div>
			<div id="step_3_availability_info_schoolHolidays"><span>Opened during the school holidays: </span><?php echo $schoolHolidays; ?></div>
		</div>
		
		<div id="step_3_aed_info_container">
			<div id="step_3_aed_info_title">INFORMATION ON THE AED</div>			
			<div id="step_3_aed_info_category"><span>AED Category:&nbsp;&nbsp; </span><?php echo $category; ?></div>
			<div id="step_3_aed_info_brand"><span>   AED Brand:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><?php echo $brand; ?></div>
			<div id="step_3_aed_info_model"><span>   AED Model:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><?php echo $deaType; ?></div>
			<div id="step_3_aed_info_serial"><span>  AED Serial No.:&nbsp; </span><?php echo $serial; ?></div>					
		</div>
		
		<div id="step_3_accessibility_info_container">
			<div id="step_3_accessibility_info_title">ACCESSIBILITY</div>
			<div id="step_3_accessibility_info_accessibility"><span>Make AED available to the public: </span><?php echo $accessibility; ?></div>
		</div>
	</div>
	
	
	
	
	<div id="confirmBodyContainer1" style="display:none">
		<img id="thumbnail" src="image_database/<?php echo "$image_underscore_name.jpg" ?>" >	
		<div id="step_3_basic_info_container">
			<div id="step_3_basic_info_company"><?php echo $company; ?></div>
			<div id="step_3_basic_info_name"><?php echo $name; ?></div>
			<div id="step_3_basic_info_phone"><span>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><?php echo $phone; ?></div>
			<div id="step_3_basic_info_email"><span>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><?php echo $email; ?></div>
			<div id="step_3_basic_info_address"><span>Licence plate No.:&nbsp; </span><?php echo $licencePlate; ?></div>
		</div>
		
		<div id="step_3_aed_info_container">
			<div id="step_3_aed_info_title">INFORMATION ON THE AED</div>			
			<div id="step_3_aed_info_category"><span>AED Category:&nbsp;&nbsp; </span><?php echo $category; ?></div>
			<div id="step_3_aed_info_brand"><span>   AED Brand:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><?php echo $brand; ?></div>
			<div id="step_3_aed_info_model"><span>   AED Model:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><?php echo $deaType; ?></div>
			<div id="step_3_aed_info_serial"><span>  AED Serial No.:&nbsp; </span><?php echo $serial; ?></div>					
		</div>
		
		<div id="step_3_accessibility_info_container">
			<div id="step_3_accessibility_info_title">ACCESSIBILITY</div>
			<div id="step_3_accessibility_info_accessibility"><span>Make AED available to the public: </span><?php echo $accessibility; ?></div>
		</div>
	</div>	
	
	
	
	
	<form name="myForm" action="../AED_POINTER/record_step4.php" method="post">	
		<?php echo $hiddenInputs; ?>
		
		<!-- TO FIX -->
		<input type="hidden"  name="image" value="<?php if (isset($fileName)) {echo $image_name;}?>">
		
		<div id="submitContainer">
			
			<input id="submitButton" type="submit" value="SUBMIT" >		
		</div>	
	</form>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDSMTHUIyndywwgyws3_C34P5LognZxgLc&sensor=false"></script>
	<script src="js/record_step3_map.js" type="text/javascript" charset="utf-8"></script>
	
	<script>
		if (document.getElementById('hiddenType1').value== 0 || document.getElementById('hiddenType1').value==  1 || document.getElementById('hiddenType1').value== 2) {
		      document.getElementById('confirmBodyContainer').style.display = "block";
		}
		else {
			 document.getElementById('confirmBodyContainer1').style.display = "block";
		}

	</script>
</body>
</html>