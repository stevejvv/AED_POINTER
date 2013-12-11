 <!DOCTYPE html>
<html>

<head>
	<title>form v.3 Step 1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/css_reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/hint.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/index_main.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/form_v3_step1.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="lib/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
	<?php include 'php/header.php';?>

	<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="#">CARTE</a></li>
			<li><a href="#">AJOUTER UN DEA</a></li>
			<li><a href="#">LIENS</a></li>
			<li><a href="#">APPLICATION</a></li>
			<li><a href="#">EN SAVOIR +</a></li>
		</ul>
	</nav>
	<div id="topSpaceContainer"></div>
	  <div id="msform">
		<ul id="progressbar">
			<li class="active">Personal information</li>
			<li >information on the AED</li>
			<li>Confirmation</li>
		</ul>
	</div>
	<div id="titles">
		<div><h1>GENERAL INFORMATION</h1></div>
		<div style="display:none"><h1>GENERAL INFORMATION<br /><span>Company</span></h1></div>
		<div style="display:none"><h1>GENERAL INFORMATION<br /><span>Independent</span></h1></div>
		<div style="display:none"><h1>GENERAL INFORMATION<br /><span>Public Place</span></h1></div>
		<div style="display:none"><h1>GENERAL INFORMATION<br /><span>Vehicle</span></h1></div>
		<div style="display:none"><h1>GENERAL INFORMATION<br /><span>Private Vehicle</span></h1></div>
		<div style="display:none"><h1>GENERAL INFORMATION<br /><span>Company Vehicle</span></h1></div>
		<div style="display:none"><h1>GENERAL INFORMATION<br /><span>AMU Ambulance Vehicle</span></h1></div>
		<div style="display:none"><h1>GENERAL INFORMATION<br /><span>Other Ambulance Vehicle</span></h1></div>
	</div>
	<form name="myForm" action="record_step2.php" method="post">
		
		<div id="typeContainer">
			<div style="text-align:center;">
				<input type="radio" name="type1" value="0" onclick="initialType()"> Company &nbsp;&nbsp;
				<input type="radio" name="type1" value="1" onclick="initialType()"> Independent &nbsp;&nbsp;
				<input type="radio" name="type1" value="2" onclick="initialType()"> Public Place &nbsp;&nbsp;
				<input type="radio" name="type1" value="3" onclick="initialType()"> Vehicle &nbsp;&nbsp;
			</div>
		</div>
		
		<div id="companyContainer" style="display:none;">
			<div id="basicInfoContainer">
				
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Company name<span>* </span><input style="float:right;" type="text" name="company0"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name0"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone0"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email0" ></div><br>
			</div>
			<div id="addressContainer">
				<div class="hint--top" data-hint="Please enter the street number, street name and town">Address <span>* </span> <input size="40" type="text" name="address0" id="address"></div>
				<input type="button" onclick="getMarkerAddress()" value="Validate">
				<div id="map_container" style="display:none;">
					<div id="addressResult"></div>
					<div id="map-canvas"></div>
				</div>
			</div>			
		</div>
		<div id="privateContainer" style="display:none;">
			<div id="basicInfoContainer">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name1"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone1"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email1"></div><br>
			</div>

			<div id="addressContainer">

				<div class="hint--top" data-hint="Please enter the street number, street name and town">Address<span>* </span>  <input size="40" type="text" name="address1"></div>
				<input type="button" onclick="getMarkerAddress()" value="Validate">
				<div id="map_container" style="display:none;">
					<div id="addressResult"></div>

					<div id="map-canvas"></div>
				</div>
			</div>			
		</div>		
		
		<div id="publicContainer" style="display:none;">
			<div id="basicInfoContainer">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Organisme name<span>* </span><input style="float:right;" type="text" name="company2"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name2"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone2"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email2"></div><br>
			</div>

			<div id="addressContainer">

				<div class="hint--top" data-hint="Please enter the street number, street name and town">Address<span>* </span>  <input size="40" type="text" name="address2"></div>
				<input type="button" onclick="getMarkerAddress()" value="Validate">
				<div id="map_container" style="display:none;">
					<div id="addressResult"></div>

					<div id="map-canvas"></div>
				</div>
			</div>			
		</div>		
		
		<div id="vehicleContainer" style="display:none;">
			<div id="vehicleTypeContainer">
				<div style="text-align:center;">
					<input  type="radio" name="type2" value="0" onclick="vehicleType()"> Private &nbsp;&nbsp;
					<input  type="radio" name="type2" value="1" onclick="vehicleType()"> Company &nbsp;&nbsp;
					<input  type="radio" name="type2" value="2" onclick="vehicleType()"> AMU Ambulance &nbsp;&nbsp;
					<input  type="radio" name="type2" value="3" onclick="vehicleType()"> Other Ambulance &nbsp;&nbsp;
				</div>
			</div>
			<div id="basicInfoContainer0" style="display:none;">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name3"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone3"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email3"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the licence plate of the vehicle">Licence Plate No.<span>* </span><input style="float:right;" type="text" name="LicencePlate3"></div><br>
			</div>
			<div id="basicInfoContainer1" style="display:none;">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Company name<span>* </span><input style="float:right;" type="text" name="company4"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name4"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone4"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email4"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the licence plate of the vehicle">Licence Plate No.<span>* </span><input style="float:right;" type="text" name="LicencePlate4"></div><br>
			</div>
			<div id="basicInfoContainer2" style="display:none;">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Company name<span>* </span><input style="float:right;" type="text" name="company5"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name5"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone5"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email5"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the licence plate of the vehicle">Licence Plate No.<span>* </span><input style="float:right;" type="text" name="LicencePlate5"></div><br>
			</div>
			<div id="basicInfoContainer3" style="display:none;">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Company name<span>* </span><input style="float:right;" type="text" name="company6"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name6"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone6"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email6" ></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the licence plate of the vehicle">Licence Plate No.<span>* </span><input style="float:right;" type="text" name="LicencePlate6"></div><br>
			</div>
		</div>
		
		<div id="hiddenOutput"></div>
		<div id="submitContainer" style="display:none;">
		<input id="submitButton" type="submit" value="Go to step 2" >		
		</div>
	</form>
	
	
	
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDSMTHUIyndywwgyws3_C34P5LognZxgLc&sensor=false"></script>
	<script src="js/form_map_v2.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/form_v3_step1.js" type="text/javascript" charset="utf-8"></script>
	
</body>
</html>
	