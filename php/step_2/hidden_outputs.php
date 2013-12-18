<?php

if ($_POST['type1'] == 0) {
	
	$hiddenOutputs = '   
	<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
	
	<input type="hidden"  name="company"  value="'.$_POST['company0'].'">
	<input type="hidden"  name="name"     value="'.$_POST['name0'].'">
	<input type="hidden"  name="phone"    value="'.$_POST['phone0'].'">
	<input type="hidden"  name="email"    value="'.$_POST['email0'].'">
	
	<input type="hidden"  name="fullAddress"  value="'.$_POST['fullAddress'].'">
	<input type="hidden"  name="country"      value="'.$_POST['country'].'">
	<input type="hidden"  name="Lat"          value="'.$_POST['Lat'].'">	
	<input type="hidden"  name="Lng"          value="'.$_POST['Lng'].'">
	
	<input type="hidden"  name="home_address" value="'.$_POST['home_address0'].'">
	
	';
	
}

else if ($_POST['type1'] == 1) {
	
	$hiddenOutputs = '   
	<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
	
	<input type="hidden"  name="name"     value="'.$_POST['name1'].'">
	<input type="hidden"  name="phone"    value="'.$_POST['phone1'].'">
	<input type="hidden"  name="email"    value="'.$_POST['email1'].'">
	
	<input type="hidden"  name="fullAddress"  value="'.$_POST['fullAddress'].'">
	<input type="hidden"  name="country"      value="'.$_POST['country'].'">
	<input type="hidden"  name="Lat"          value="'.$_POST['Lat'].'">	
	<input type="hidden"  name="Lng"          value="'.$_POST['Lng'].'">
	
	<input type="hidden"  name="home_address" value="'.$_POST['home_address1'].'">
	';

}

else if ($_POST['type1'] == 2) {
	
	$hiddenOutputs = '   
	<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
	
	<input type="hidden"  name="company"  value="'.$_POST['company2'].'">
	<input type="hidden"  name="name"     value="'.$_POST['name2'].'">
	<input type="hidden"  name="phone"    value="'.$_POST['phone2'].'">
	<input type="hidden"  name="email"    value="'.$_POST['email2'].'">
	
	<input type="hidden"  name="fullAddress"  value="'.$_POST['fullAddress'].'">
	<input type="hidden"  name="country"      value="'.$_POST['country'].'">
	<input type="hidden"  name="Lat"          value="'.$_POST['Lat'].'">	
	<input type="hidden"  name="Lng"          value="'.$_POST['Lng'].'">
	
	<input type="hidden"  name="home_address" value="'.$_POST['home_address2'].'">
	';

}

else if ($_POST['type1'] == 3) {
	 
	if ($_POST['type2'] == 0) {	
		
		$output      = "vehicle Private";
		
		$hiddenOutputs = '   
		<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
		<input type="hidden"  name="type2"    value="'.$_POST['type2'].'">
							
		<input type="hidden"  name="name"     		value="'.$_POST['name3'].'">
		<input type="hidden"  name="phone"    		value="'.$_POST['phone3'].'">
		<input type="hidden"  name="email"    		value="'.$_POST['email3'].'">
		<input type="hidden"  name="licencePlate"   value="'.$_POST['licencePlate3'].'">
		';
		
	}
	else if ($_POST['type2'] == 1) {
		
		$hiddenOutputs = '   
		<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
		<input type="hidden"  name="type2"    value="'.$_POST['type2'].'">
							
		<input type="hidden"  name="company"  value="'.$_POST['company4'].'">
		<input type="hidden"  name="name"     value="'.$_POST['name4'].'">
		<input type="hidden"  name="phone"    value="'.$_POST['phone4'].'">
		<input type="hidden"  name="email"    value="'.$_POST['email4'].'">
		<input type="hidden"  name="licencePlate"  value="'.$_POST['licencePlate4'].'">
		';
		
		
	}
	else if ($_POST['type2'] == 2) {
		
		$hiddenOutputs = '   
		<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
		<input type="hidden"  name="type2"    value="'.$_POST['type2'].'">
							
		<input type="hidden"  name="company"  value="'.$_POST['company5'].'">
		<input type="hidden"  name="name"     value="'.$_POST['name5'].'">
		<input type="hidden"  name="phone"    value="'.$_POST['phone5'].'">
		<input type="hidden"  name="email"    value="'.$_POST['email5'].'">
		<input type="hidden"  name="licencePlate"  value="'.$_POST['licencePlate5'].'">
		';
		
		
	}
	else if ($_POST['type2'] == 3) {	
		
		$hiddenOutputs = '   
		<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
		<input type="hidden"  name="type2"    value="'.$_POST['type2'].'">
							
		<input type="hidden"  name="company"  		value="'.$_POST['company6'].'">
		<input type="hidden"  name="name"    	 	value="'.$_POST['name6'].'">
		<input type="hidden"  name="phone"    		value="'.$_POST['phone6'].'">
		<input type="hidden"  name="email"    		value="'.$_POST['email6'].'">
		<input type="hidden"  name="licencePlate"  value="'.$_POST['licencePlate6'].'">
		';	
	}
	
}
?>