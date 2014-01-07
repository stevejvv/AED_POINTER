<?php

if ($_POST['type1'] == 0 or $_POST['type1'] == 1 or $_POST['type1'] == 2) {
	
	$hiddenOutputs = '   
	<input type="hidden" id="hiddenType1" name="type1"    value="'.$_POST['type1'].'">
	
	<input type="hidden"  name="company"  value="'.$_POST['company0'].'">
	<input type="hidden"  name="name"     value="'.$_POST['name0'].'">
	<input type="hidden"  name="phone"    value="'.$_POST['phone0'].'">
	<input type="hidden"  name="email"    value="'.$_POST['email0'].'">
	<input type="hidden"  name="home_address" value="'.$_POST['home_address0'].'">
	
	<input type="hidden"  name="fullAddress"  value="'.$_POST['fullAddress'].'">
	<input type="hidden"  name="country"      value="'.$_POST['country'].'">
	<input type="hidden"  name="Lat"          value="'.$_POST['Lat'].'">	
	<input type="hidden"  name="Lng"          value="'.$_POST['Lng'].'">
	';	
}
else  {		
		$output      = "vehicle Private";
		
		$hiddenOutputs = '   
		<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
		<input type="hidden"  name="type2"    value="'.$_POST['type2'].'">
		
		<input type="hidden"  name="company"  value="'.$_POST['company1'].'">					
		<input type="hidden"  name="name"     		value="'.$_POST['name1'].'">
		<input type="hidden"  name="phone"    		value="'.$_POST['phone1'].'">
		<input type="hidden"  name="email"    		value="'.$_POST['email1'].'">
		<input type="hidden"  name="licencePlate"   value="'.$_POST['licencePlate1'].'">
		';	
}

?>