<?php 
if ($_POST['type1'] == 0) {

	$type1 = $_POST['type1'];

	$company = $_POST['company'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$fullAddress = $_POST['fullAddress'];
	$country = $_POST['country'];
	$Lat = $_POST['Lat'];
	$Lng = $_POST['Lng'];

	$category = $_POST['category'];
	$brand = $_POST['brand'];
	$deaType = $_POST['deaType'];
	$serial = $_POST['serial'];

	$timesType = $_POST['timesType'];
	$monday = $_POST['monday'];
	$time1 = $_POST['time1'];
	$time2 = $_POST['time2'];
	$tuesday = $_POST['tuesday'];
	$time3 = $_POST['time3'];
	$time4 = $_POST['time4'];
	$wednesday = $_POST['wednesday'];
	$time5 = $_POST['time5'];
	$time6 = $_POST['time6'];
	$thursday = $_POST['thursday'];
	$time7 = $_POST['time7'];
	$time8 = $_POST['time8'];
	$friday = $_POST['friday'];
	$time9 = $_POST['time9'];
	$time10 = $_POST['time10'];
	$saturday = $_POST['saturday'];
	$time11 = $_POST['time11'];
	$time12 = $_POST['time12'];
	$sunday = $_POST['sunday'];
	$time13 = $_POST['time13'];
	$time14 = $_POST['time14'];

	$lunchTime =    $_POST['lunchTime'];
	$bankHolidays = $_POST['bankHolidays'];
	$description =  $_POST['description'];

	$accessibility = $_POST['accessibility'];
	$uploaded_file = $_POST['uploaded_file'];

	$hiddenInputs = 
	'
		<input type="hidden"  name="type1"    value="'.$type1.'">
	
		<input type="hidden"  name="company"  value="'.$company.'">
		<input type="hidden"  name="name"     value="'.$name.'">
		<input type="hidden"  name="phone"    value="'.$phone.'">
		<input type="hidden"  name="email"    value="'.$email.'">
	
		<input type="hidden"  name="fullAddress"  value="'.$fullAddress.'">
		<input type="hidden"  name="country"      value="'.$country.'">
		<input type="hidden"  name="Lat"          value="'.$Lat.'">	
		<input type="hidden"  name="Lng"          value="'.$Lng.'">
	
		<input type="hidden"  name="category"  value="'.$category.'">
		<input type="hidden"  name="brand"     value="'.$brand.'">
		<input type="hidden"  name="deaType"   value="'.$deaType.'">
		<input type="hidden"  name="serial"    value="'.$serial.'">

		<input type="hidden"  name="timesType"  value="'.$timesType.'">
		<input type="hidden"  name="monday"     value="'.$monday.'">
		<input type="hidden"  name="time1"  	value="'.$time1.'">
		<input type="hidden"  name="time2"  	value="'.$time2.'">
		<input type="hidden"  name="tuesday"  	value="'.$tuesday.'">
		<input type="hidden"  name="time3"  	value="'.$time3.'">
		<input type="hidden"  name="time4"  	value="'.$time4.'">
		<input type="hidden"  name="wednesday"  value="'.$wednesday.'">
		<input type="hidden"  name="time5"  	value="'.$time5.'">
		<input type="hidden"  name="time6"  	value="'.$time6.'">
		<input type="hidden"  name="thursday"  	value="'.$thursday.'">
		<input type="hidden"  name="time7"  	value="'.$time7.'">
		<input type="hidden"  name="time8"  	value="'.$time8.'">
		<input type="hidden"  name="friday"  	value="'.$friday.'">
		<input type="hidden"  name="time9"  	value="'.$time9.'">
		<input type="hidden"  name="time10"  	value="'.$time10.'">
		<input type="hidden"  name="saturday"  	value="'.$saturday.'">
		<input type="hidden"  name="time11"  	value="'.$time11.'">
		<input type="hidden"  name="time12"  	value="'.$time12.'">
		<input type="hidden"  name="sunday"  	value="'.$sunday.'">
		<input type="hidden"  name="time13"  	value="'.$time13.'">
		<input type="hidden"  name="time14"  	value="'.$time14.'">

		<input type="hidden"  name="lunchTime"     value="'.$lunchTime.'">
		<input type="hidden"  name="bankHolidays"  value="'.$bankHolidays.'">
		
		<input type="hidden"  name="description"  value="'.$description.'">
		<input type="hidden"  name="accessibility"  value="'.$accessibility.'">
		<input type="hidden"  name="uploaded_file"  value="'.$uploaded_file.'">
	';	

	//Times	
	include 'php/step_3/confirm_times_custom.php';
	
	$visibleOutput = 
	'
	<div id="step_3_basic_info_container">
		<div id="step_3_basic_info_company">'.$company.'</div>
		<div id="step_3_basic_info_name">'.$name.'</div>
		<div id="step_3_basic_info_address"></div>
		<div id="step_3_basic_info_phone"><span>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>'.$phone.'</div>
		<div id="step_3_basic_info_email"><span>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>'.$email.'</div>
		<div id="step_3_basic_info_address"><span>Address:&nbsp; </span>'.$fullAddress.'</div>
	</div>
	
	<div id="step_3_basic_info_description"><span>Description: <br /></span>'.$description.'</div>
	
	<div id="step_3_availability_info_container">
		
		<div id="step_3_availability_info_title">AVAILABILITY OF THE AED</div>
		<div id="step_3_availability_info_times">'.$times_output.'</div>
		<div id="step_3_availability_info_lunch"><span>   Opened during lunch time:&nbsp;&nbsp;&nbsp; </span>'.$lunchTime.'</div>
		<div id="step_3_availability_info_holidays"><span>Opened during the holidays: </span>'.$bankHolidays.'</div>
	</div>
	<div id="step_3_aed_info_container">
		<div id="step_3_aed_info_title">INFORMATION ON THE AED</div>			
		<div id="step_3_aed_info_category"><span>AED Category:&nbsp;&nbsp; </span>'.$category.'</div>
		<div id="step_3_aed_info_brand"><span>   AED Brand:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>'.$brand.'</div>
		<div id="step_3_aed_info_model"><span>   AED Model:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>'.$deaType.'</div>
		<div id="step_3_aed_info_serial"><span>  AED Serial No.:&nbsp; </span>'.$serial.'</div>					
	</div>
	<div id="step_3_accessibility_info_container">
		<div id="step_3_accessibility_info_title">ACCESSIBILITY</div>
		<div id="step_3_accessibility_info_accessibility"><span>Make AED available to the public: </span>'.$accessibility.'</div>
	</div>
		';
	
}


else if ($_POST['type1'] == 1) {

	$type1 = $_POST['type1'];

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$fullAddress = $_POST['fullAddress'];
	$country = $_POST['country'];
	$Lat = $_POST['Lat'];
	$Lng = $_POST['Lng'];

	$category = $_POST['category'];
	$brand = $_POST['brand'];
	$deaType = $_POST['deaType'];
	$serial = $_POST['serial'];

	$timesType = $_POST['timesType'];
	$monday = $_POST['monday'];
	$time1 = $_POST['time1'];
	$time2 = $_POST['time2'];
	$tuesday = $_POST['tuesday'];
	$time3 = $_POST['time3'];
	$time4 = $_POST['time4'];
	$wednesday = $_POST['wednesday'];
	$time5 = $_POST['time5'];
	$time6 = $_POST['time6'];
	$thursday = $_POST['thursday'];
	$time7 = $_POST['time7'];
	$time8 = $_POST['time8'];
	$friday = $_POST['friday'];
	$time9 = $_POST['time9'];
	$time10 = $_POST['time10'];
	$saturday = $_POST['saturday'];
	$time11 = $_POST['time11'];
	$time12 = $_POST['time12'];
	$sunday = $_POST['sunday'];
	$time13 = $_POST['time13'];
	$time14 = $_POST['time14'];

	$lunchTime = $_POST['lunchTime'];
	$bankHolidays = $_POST['bankHolidays'];
	$holidays = $_POST['holidays'];
	$description =  $_POST['description'];

	$accessibility = $_POST['accessibility'];
	$uploaded_file = $_POST['uploaded_file'];
	
	$hiddenInputs = 
	'
		<input type="hidden"  name="type1"    value="'.$type1.'">
	
		<input type="hidden"  name="name"     value="'.$name.'">
		<input type="hidden"  name="phone"    value="'.$phone.'">
		<input type="hidden"  name="email"    value="'.$email.'">
	
		<input type="hidden"  name="fullAddress"  value="'.$fullAddress.'">
		<input type="hidden"  name="country"      value="'.$country.'">
		<input type="hidden"  name="Lat"          value="'.$Lat.'">	
		<input type="hidden"  name="Lng"          value="'.$Lng.'">
	
		<input type="hidden"  name="category"  value="'.$category.'">
		<input type="hidden"  name="brand"     value="'.$brand.'">
		<input type="hidden"  name="deaType"   value="'.$deaType.'">
		<input type="hidden"  name="serial"    value="'.$serial.'">

		<input type="hidden"  name="timesType"  value="'.$timesType.'">
		<input type="hidden"  name="monday"     value="'.$monday.'">
		<input type="hidden"  name="time1"  	value="'.$time1.'">
		<input type="hidden"  name="time2"  	value="'.$time2.'">
		<input type="hidden"  name="tuesday"  	value="'.$tuesday.'">
		<input type="hidden"  name="time3"  	value="'.$time3.'">
		<input type="hidden"  name="time4"  	value="'.$time4.'">
		<input type="hidden"  name="wednesday"  value="'.$wednesday.'">
		<input type="hidden"  name="time5"  	value="'.$time5.'">
		<input type="hidden"  name="time6"  	value="'.$time6.'">
		<input type="hidden"  name="thursday"  	value="'.$thursday.'">
		<input type="hidden"  name="time7"  	value="'.$time7.'">
		<input type="hidden"  name="time8"  	value="'.$time8.'">
		<input type="hidden"  name="friday"  	value="'.$friday.'">
		<input type="hidden"  name="time9"  	value="'.$time9.'">
		<input type="hidden"  name="time10"  	value="'.$time10.'">
		<input type="hidden"  name="saturday"  	value="'.$saturday.'">
		<input type="hidden"  name="time11"  	value="'.$time11.'">
		<input type="hidden"  name="time12"  	value="'.$time12.'">
		<input type="hidden"  name="sunday"  	value="'.$sunday.'">
		<input type="hidden"  name="time13"  	value="'.$time13.'">
		<input type="hidden"  name="time14"  	value="'.$time14.'">

		<input type="hidden"  name="lunchTime"     value="'.$lunchTime.'">
		<input type="hidden"  name="bankHolidays"  value="'.$bankHolidays.'">
		<input type="hidden"  name="holidays"  	   value="'.$holidays.'">
		<input type="hidden"  name="description"  value="'.$description.'">

		<input type="hidden"  name="accessibility"  value="'.$accessibility.'">
		<input type="hidden"  name="uploaded_file"  value="'.$uploaded_file.'">
	';

}

else if ($_POST['type1'] == 2) {
	
	$type1 = $_POST['type1'];

	$company = $_POST['company'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$fullAddress = $_POST['fullAddress'];
	$country = $_POST['country'];
	$Lat = $_POST['Lat'];
	$Lng = $_POST['Lng'];

	$category = $_POST['category'];
	$brand = $_POST['brand'];
	$deaType = $_POST['deaType'];
	$serial = $_POST['serial'];

	$timesType = $_POST['timesType'];
	$monday = $_POST['monday'];
	$time1 = $_POST['time1'];
	$time2 = $_POST['time2'];
	$tuesday = $_POST['tuesday'];
	$time3 = $_POST['time3'];
	$time4 = $_POST['time4'];
	$wednesday = $_POST['wednesday'];
	$time5 = $_POST['time5'];
	$time6 = $_POST['time6'];
	$thursday = $_POST['thursday'];
	$time7 = $_POST['time7'];
	$time8 = $_POST['time8'];
	$friday = $_POST['friday'];
	$time9 = $_POST['time9'];
	$time10 = $_POST['time10'];
	$saturday = $_POST['saturday'];
	$time11 = $_POST['time11'];
	$time12 = $_POST['time12'];
	$sunday = $_POST['sunday'];
	$time13 = $_POST['time13'];
	$time14 = $_POST['time14'];

	$lunchTime = $_POST['lunchTime'];
	$bankHolidays = $_POST['bankHolidays'];
	$holidays = $_POST['holidays'];
	$description =  $_POST['description'];

	$accessibility = $_POST['accessibility'];
	$uploaded_file = $_POST['uploaded_file'];
	
	$hiddenInputs = 
	'
		<input type="hidden"  name="type1"    value="'.$type1.'">
	
		<input type="hidden"  name="company"  value="'.$company.'">
		<input type="hidden"  name="name"     value="'.$name.'">
		<input type="hidden"  name="phone"    value="'.$phone.'">
		<input type="hidden"  name="email"    value="'.$email.'">
	
		<input type="hidden"  name="fullAddress"  value="'.$fullAddress.'">
		<input type="hidden"  name="country"      value="'.$country.'">
		<input type="hidden"  name="Lat"          value="'.$Lat.'">	
		<input type="hidden"  name="Lng"          value="'.$Lng.'">
	
		<input type="hidden"  name="category"  value="'.$category.'">
		<input type="hidden"  name="brand"     value="'.$brand.'">
		<input type="hidden"  name="deaType"   value="'.$deaType.'">
		<input type="hidden"  name="serial"    value="'.$serial.'">

		<input type="hidden"  name="timesType"  value="'.$timesType.'">
		<input type="hidden"  name="monday"     value="'.$monday.'">
		<input type="hidden"  name="time1"  	value="'.$time1.'">
		<input type="hidden"  name="time2"  	value="'.$time2.'">
		<input type="hidden"  name="tuesday"  	value="'.$tuesday.'">
		<input type="hidden"  name="time3"  	value="'.$time3.'">
		<input type="hidden"  name="time4"  	value="'.$time4.'">
		<input type="hidden"  name="wednesday"  value="'.$wednesday.'">
		<input type="hidden"  name="time5"  	value="'.$time5.'">
		<input type="hidden"  name="time6"  	value="'.$time6.'">
		<input type="hidden"  name="thursday"  	value="'.$thursday.'">
		<input type="hidden"  name="time7"  	value="'.$time7.'">
		<input type="hidden"  name="time8"  	value="'.$time8.'">
		<input type="hidden"  name="friday"  	value="'.$friday.'">
		<input type="hidden"  name="time9"  	value="'.$time9.'">
		<input type="hidden"  name="time10"  	value="'.$time10.'">
		<input type="hidden"  name="saturday"  	value="'.$saturday.'">
		<input type="hidden"  name="time11"  	value="'.$time11.'">
		<input type="hidden"  name="time12"  	value="'.$time12.'">
		<input type="hidden"  name="sunday"  	value="'.$sunday.'">
		<input type="hidden"  name="time13"  	value="'.$time13.'">
		<input type="hidden"  name="time14"  	value="'.$time14.'">

		<input type="hidden"  name="lunchTime"     value="'.$lunchTime.'">
		<input type="hidden"  name="bankHolidays"  value="'.$bankHolidays.'">
		<input type="hidden"  name="holidays"  	   value="'.$holidays.'">
		<input type="hidden"  name="description"  value="'.$description.'">

		<input type="hidden"  name="accessibility"  value="'.$accessibility.'">
		<input type="hidden"  name="uploaded_file"  value="'.$uploaded_file.'">
	';
}

else if ($_POST['type1'] == 3) {
	 
	if ($_POST['type2'] == 0) {	
		
		$type1 = $_POST['type1'];
		$type2 = $_POST['type2'];

		$company = $_POST['company'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$licencePlate = $_POST['licencePlate'];
	
		$category = $_POST['category'];
		$brand = $_POST['brand'];
		$deaType = $_POST['deaType'];
		$serial = $_POST['serial'];
		
		$accessibility = $_POST['accessibility'];
		$uploaded_file = $_POST['uploaded_file'];
		
		$hiddenInputs = 
		'
			<input type="hidden"  name="type1"    value="'.$type1.'">
			<input type="hidden"  name="type2"    value="'.$type2.'">

			<input type="hidden"  name="company"  value="'.$company.'">
			<input type="hidden"  name="name"     value="'.$name.'">
			<input type="hidden"  name="phone"    value="'.$phone.'">
			<input type="hidden"  name="email"    value="'.$email.'">
			<input type="hidden"  name="licencePlate"    value="'.$licencePlate.'">
			
			<input type="hidden"  name="category"  value="'.$category.'">
			<input type="hidden"  name="brand"     value="'.$brand.'">
			<input type="hidden"  name="deaType"   value="'.$deaType.'">
			<input type="hidden"  name="serial"    value="'.$serial.'">
			
			<input type="hidden"  name="accessibility"  value="'.$accessibility.'">
			<input type="hidden"  name="uploaded_file"  value="'.$uploaded_file.'">
		';
				
	}
	else if ($_POST['type2'] == 1) {
	
		$type1 = $_POST['type1'];
		$type2 = $_POST['type2'];

		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$licencePlate = $_POST['licencePlate'];
	
		$category = $_POST['category'];
		$brand = $_POST['brand'];
		$deaType = $_POST['deaType'];
		$serial = $_POST['serial'];
		
		$accessibility = $_POST['accessibility'];
		$uploaded_file = $_POST['uploaded_file'];
		
		$hiddenInputs = 
		'
			<input type="hidden"  name="type1"    value="'.$type1.'">
			<input type="hidden"  name="type2"    value="'.$type2.'">

			<input type="hidden"  name="name"     value="'.$name.'">
			<input type="hidden"  name="phone"    value="'.$phone.'">
			<input type="hidden"  name="email"    value="'.$email.'">
			<input type="hidden"  name="licencePlate"    value="'.$licencePlate.'">
			
			<input type="hidden"  name="category"  value="'.$category.'">
			<input type="hidden"  name="brand"     value="'.$brand.'">
			<input type="hidden"  name="deaType"   value="'.$deaType.'">
			<input type="hidden"  name="serial"    value="'.$serial.'">
			
			<input type="hidden"  name="accessibility"  value="'.$accessibility.'">
			<input type="hidden"  name="uploaded_file"  value="'.$uploaded_file.'">
		';
	
	}
	else if ($_POST['type2'] == 2) {
		
		$type1 = $_POST['type1'];
		$type2 = $_POST['type2'];

		$company = $_POST['company'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$licencePlate = $_POST['licencePlate'];
	
		$category = $_POST['category'];
		$brand = $_POST['brand'];
		$deaType = $_POST['deaType'];
		$serial = $_POST['serial'];
		
		$accessibility = $_POST['accessibility'];
		$uploaded_file = $_POST['uploaded_file'];
		
		$hiddenInputs = 
		'
			<input type="hidden"  name="type1"    value="'.$type1.'">
			<input type="hidden"  name="type2"    value="'.$type2.'">

			<input type="hidden"  name="company"  value="'.$company.'">
			<input type="hidden"  name="name"     value="'.$name.'">
			<input type="hidden"  name="phone"    value="'.$phone.'">
			<input type="hidden"  name="email"    value="'.$email.'">
			<input type="hidden"  name="licencePlate"    value="'.$licencePlate.'">
			
			<input type="hidden"  name="category"  value="'.$category.'">
			<input type="hidden"  name="brand"     value="'.$brand.'">
			<input type="hidden"  name="deaType"   value="'.$deaType.'">
			<input type="hidden"  name="serial"    value="'.$serial.'">
			
			<input type="hidden"  name="accessibility"  value="'.$accessibility.'">
			<input type="hidden"  name="uploaded_file"  value="'.$uploaded_file.'">
		';
	}
	else if ($_POST['type2'] == 3) {	
		
		$type1 = $_POST['type1'];
		$type2 = $_POST['type2'];

		$company = $_POST['company'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$licencePlate = $_POST['licencePlate'];
	
		$category = $_POST['category'];
		$brand = $_POST['brand'];
		$deaType = $_POST['deaType'];
		$serial = $_POST['serial'];
		
		$accessibility = $_POST['accessibility'];
		$uploaded_file = $_POST['uploaded_file'];
		
		$hiddenInputs = 
		'
			<input type="hidden"  name="type1"    value="'.$type1.'">
			<input type="hidden"  name="type2"    value="'.$type2.'">

			<input type="hidden"  name="company"  value="'.$company.'">
			<input type="hidden"  name="name"     value="'.$name.'">
			<input type="hidden"  name="phone"    value="'.$phone.'">
			<input type="hidden"  name="email"    value="'.$email.'">
			<input type="hidden"  name="licencePlate"    value="'.$licencePlate.'">
			
			<input type="hidden"  name="category"  value="'.$category.'">
			<input type="hidden"  name="brand"     value="'.$brand.'">
			<input type="hidden"  name="deaType"   value="'.$deaType.'">
			<input type="hidden"  name="serial"    value="'.$serial.'">
			
			<input type="hidden"  name="accessibility"  value="'.$accessibility.'">
			<input type="hidden"  name="uploaded_file"  value="'.$uploaded_file.'">
		';
	}	
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirm</title>
	<link rel="stylesheet" href="css/css_reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/form_v3_step1.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/record_step3.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/index_main.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="lib/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>


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
	
	<?php include 'php/step_3/upload_file.php'; ?>
	
	<div id="alert_submit"><span>Note</span>: You need to press the validate button at the bottom of the page in order to submit your application</div>
	<div id="confirmBodyContainer">
		<img id="thumbnail" src="<?php echo $thumbnail ?>" >		
		<?php echo $visibleOutput; ?>	
	</div>	
	<form name="myForm" action="" method="post">	
		<?php echo $hiddenInputs; ?>
		<input type="hidden"  name="imageDirectory" value="<?php if (isset($thumbnail)) {echo $thumbnail;}?>">
		<div id="submitContainer">
			<input id="submitButton" type="submit" value="SUBMIT" >		
		</div>	
	</form>
</body>
</html>