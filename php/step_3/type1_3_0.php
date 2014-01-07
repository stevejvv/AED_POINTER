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
	$logo_name = $_POST['logo_name'];
	
	$hiddenInputs = 
	'
		<input type="hidden"  id="hiddenType1" name="type1"    value="'.$type1.'">
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
		<input type="hidden"  name="logo_name"  value="'.$logo_name.'">	';
?>