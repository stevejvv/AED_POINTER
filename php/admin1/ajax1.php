<?php
	// get the q parameter from URL
	$id = $_REQUEST["theId"];
	
	if (!$link = mysql_connect("localhost","root","orion")) {
	    echo 'Could not connect to mysql';
	    exit;
	}

	if (!mysql_select_db('AED_POINTER', $link)) {
	    echo 'Could not select database';
	    exit;
	}

	$sql    = 'SELECT* FROM tempDb WHERE id= '.$id.'';
	$result = mysql_query($sql, $link);

	if (!$result) {
	    echo "DB Error, could not query the database\n";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}
	$row = mysql_fetch_assoc($result);
	echo '
		<div id="ajaxBasicInfo">
			<label class="label" for="company">Company</label>
				<input class="input "type="text" size="28" name="company"  value="'. $row['company'] .'">
			<label class="label "for="name">Name</label>
				<input class="input red"type="text" size="28" name="name"     value="'. $row['name'] .'">
			<label class="label"for="phone">Phone</label>
				<input class="input"type="text" size="28" name="phone"    value="'. $row['phone'] .'">
			<label class="label"for="email">Email</label>
				<input class="input red"type="text" size="28" name="email"    value="'. $row['email'] .'">
			<label class="label"for="home_address">HomeAddress</label>
				<input class="input" type="text"  size="28" name="home_address" value="'. $row['home_address'] .'">
			<label class="label"for="country">Country</label>
				<input class="input"type="text" size="28" name="country"      value="'. $row['country'] .'">
			
		</div>
		<div id="ajaxAddressInfo">
			<div id="showMap" onclick="adminMaps(\''. $row['fullAddress'] .'\')">Show Map</div>
			<label class="label"for="fullAddress">Full Address</label>
				<input id="fullAddress" class="input red"type="text" size="40" name="fullAddress"  value="'. $row['fullAddress'] .'">
			<div id="result_map">
				<div id="map-canvas"></div>
			</div>
		</div>
		<div id="ajaxAedInfo">
			<label class="label"for="category">Category</label>
			<input class="input"type="text"  name="category"  value="'.$row['category'].'">
			<label class="label"for="brand">Brand</label>
			<input class="input"type="text"  name="brand"     value="'.$row['brand'].'">
			<label class="label"for="deaType">DEA Type</label>
			<input class="input"type="text"  name="deaType"   value="'.$row['deaType'].'">
			<label class="label"for="serial">Serial No.</label>
			<input class="input"type="text"  name="serial"    value="'.$row['serial'].'">
		</div>
	';
	

	mysql_free_result($result);
	
	
	

?>