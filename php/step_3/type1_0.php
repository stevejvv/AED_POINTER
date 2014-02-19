<?php
	$type1 = $_POST['type1'];

	$company = $_POST['company'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$fullAddress = $_POST['fullAddress'];
	$country = $_POST['country'];
	$Lat = $_POST['Lat'];
	$Lng = $_POST['Lng'];
	
	$homeAddress = $_POST['home_address'];

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
	
	$variableTime = $_POST['variableTime'];

	$lunchTime =    $_POST['lunchTime'];
	$lunchTimeClose =    $_POST['lunchTimeClose'];
	$lunchTimeOpen =    $_POST['lunchTimeOpen'];
	
	$bankHolidays = $_POST['bankHolidays'];
	$schoolHolidays = $_POST['schoolHolidays'];
	$autreInfoDispo = $_POST['autreInfoDispo'];
	
	$description =  $_POST['description'];
	$accessibleAuPublic =  $_POST['accessibleAuPublic'];
	$auPublicNonDescription =  $_POST['auPublicNonDescription'];

	$accessibility = $_POST['accessibility'];
	$logo_name = $_POST['logo_name'];

	//REMOVE SLASHES
	
	$fullAddress = stripslashes($fullAddress);
	$fullAddress = stripslashes($fullAddress);
	
	$description = stripslashes($description);
	$description = stripslashes($description);
	
	$auPublicNonDescription = stripslashes($auPublicNonDescription);
	$auPublicNonDescription = stripslashes($auPublicNonDescription);
	
	$variableTime = stripslashes($variableTime);
	$variableTime = stripslashes($variableTime);
	
	$autreInfoDispo = stripslashes($autreInfoDispo);
	$autreInfoDispo = stripslashes($autreInfoDispo);
	
	$hiddenInputs = 
	'
		<input type="hidden"  id="hiddenType1" name="type1"    value="'.$type1.'">
	
		<input type="hidden"  name="company"  value="'.$company.'">
		<input type="hidden"  id="hiddenName" name="name"     value="'.$name.'">
		<input type="hidden"  name="phone"    value="'.$phone.'">
		<input type="hidden"  id="hiddenEmail" name="email"    value="'.$email.'">
	
		<input type="hidden"  name="fullAddress" id="fullAddress" value="'.$fullAddress.'">
		<input type="hidden"  name="country"      value="'.$country.'">
		<input type="hidden"  id="hiddenLat" name="Lat"          value="'.$Lat.'">	
		<input type="hidden"  id="hiddenLng" name="Lng"          value="'.$Lng.'">
		
		<input type="hidden"  name="home_address" value="'.$homeAddress.'">
	
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
		
		<input type="hidden"  name="variableTime"  	value="'.$variableTime.'">

		<input type="hidden"  name="lunchTime"     value="'.$lunchTime.'">
		<input type="hidden"  name="lunchTimeClose"     value="'.$lunchTimeClose.'">
		<input type="hidden"  name="lunchTimeOpen"     value="'.$lunchTimeOpen.'">
		
		<input type="hidden"  name="bankHolidays"  value="'.$bankHolidays.'">
		<input type="hidden"  name="schoolHolidays"  value="'.$schoolHolidays.'">
		<input type="hidden"  name="autreInfoDispo"  value="'.$autreInfoDispo.'">
		
		<input type="hidden"  name="description"  value="'.$description.'">
		<input type="hidden"  name="accessibleAuPublic"  value="'.$accessibleAuPublic.'">
		<input type="hidden"  name="auPublicNonDescription"  value="'.$auPublicNonDescription.'">
		
		<input type="hidden"  name="accessibility"  value="'.$accessibility.'">
		<input type="hidden"  name="logo_name"  value="'.$logo_name.'">
	';	

	//LUNCHTIME
	$lunchTimeString;
	if($lunchTime == 1){
		$lunchTimeString = 'Disponible';
	}
	else {
		$lunchTimeString = 'Non disponible de '.$lunchTimeClose.' à '.$lunchTimeOpen;
	}
	//BANK HOLIDAYS
	$bankHolidaysString;
	if($bankHolidays == 1){
		$bankHolidaysString = 'Disponible';
	}
	else {
		$bankHolidaysString = 'Non disponible';
	}
	//SCHOOL HOLIDAYS
	$schoolHolidaysString;
	if($schoolHolidays == 1){
		$schoolHolidaysString = 'Disponible';
	}
	else {
		$schoolHolidaysString = 'non Disponible';
	}

	//VISIBLE AU PUBLIC
	$accessibilityString;
	if($accessibility == 1){
		$accessibilityString = 'Oui';
	}
	else {
		$accessibilityString = 'Non';
	}
	//ACCESSIBLE AU PUBLIC
	$accessibleAuPublicString;
	if($accessibleAuPublic == 1){
		$accessibleAuPublicString = 'Accessible';
	}
	else {
		$accessibleAuPublicString = $auPublicNonDescription;
	}




	//Times	
	include 'php/step_3/confirm_times_custom.php';
	
	
	

?>