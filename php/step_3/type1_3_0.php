<?php
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

$visibleOutput = 
'
<div id="step_3_basic_info_container">
	<div id="step_3_basic_info_company">'.$company.'</div>
	<div id="step_3_basic_info_name">'.$name.'</div>
	<div id="step_3_basic_info_address"></div>
	<div id="step_3_basic_info_phone"><span>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>'.$phone.'</div>
	<div id="step_3_basic_info_email"><span>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>'.$email.'</div>
	<div id="step_3_basic_info_address"><span>Licence plate No.:&nbsp; </span>'.$licencePlate.'</div>
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


?>