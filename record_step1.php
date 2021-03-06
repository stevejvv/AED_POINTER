 <!DOCTYPE html>
<html>

<head>
	<title>form v.3 Step 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="icon" type="image/png" href="images/pointer.png">
	
	<link rel="stylesheet" href="lib/css/css_reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="lib/css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="lib/css/hint.css" type="text/css" media="screen" title="no title" charset="utf-8">
	
	<link rel="stylesheet" href="css/index_main.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/record_step1.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="lib/js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
 
</head>
<body>
	
<!--HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER -->	

	<?php include 'php/header.php';?>

<!--NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR NAVBAR -->

	<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="#">CARTE</a></li>
			<li><a href="#">AJOUTER UN DEA</a></li>
			<li><a href="#">LIENS</a></li>
			<li><a href="#">APPLICATION</a></li>
			<li><a href="#">EN SAVOIR +</a></li>
		</ul>
	</nav>

<!--PROGRESS BAR PROGRESS BAR PROGRESS BAR PROGRESS BAR PROGRESS BAR -->

	<div id="topSpaceContainer"></div>
	  <div id="msform">
		<ul id="progressbar">
			<li class="active">Personal information</li>
			<li >information on the AED</li>
			<li>Confirmation</li>
		</ul>
	</div>
	
<!--FORM HEADER FORM HEADER FORM HEADER FORM HEADER FORM HEADER FORM HEADER -->

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

<!--FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM -->
	
	<form name="myForm" action="record_step2.php" method="post">

<!--FORM INITIAL TYPES FORM INITIAL TYPES FORM INITIAL TYPES FORM INITIAL TYPES -->	
		
		<div id="typeContainer">
			<div style="text-align:center;">
				<input type="radio" name="type1" value="0" onclick="initialType()"> Company &nbsp;&nbsp;
				<input type="radio" name="type1" value="1" onclick="initialType()"> Independent &nbsp;&nbsp;
				<input type="radio" name="type1" value="2" onclick="initialType()"> Public Place &nbsp;&nbsp;
				<input type="radio" name="type1" value="3" onclick="initialType()"> Vehicle &nbsp;&nbsp;
			</div>
		</div>

		



<!--COMPANY COMPANY COMPANY COMPANY COMPANY COMPANY COMPANY COMPANY COMPANY COMPANY -->	
	
		<div id="companyContainer" style="display:none;">
			
			<div id="basicInfoContainer">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Company name<span>* </span><input style="float:right;" type="text" name="company0"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name0"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone0"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email0" ></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the address of the company">Company's address<span>* </span><input style="float:right;" type="text" name="home_address0" ></div><br>
			</div>
			
			<div id="addressContainer">
				<div class="hint--top" data-hint="Please enter the street number, street name and town">Address of the AED <span>* </span> <input size="40" type="text" name="address0" id="address"></div>
				<input type="button" onclick="getMarkerAddress0()" value="Validate">
				<div id="map_container0" style="display:none;">
					<div id="addressResult0"></div>
					<div id="map-canvas0"></div>
				</div>
			</div>	
			
		</div>

<!--PRIVATE PRIVATE PRIVATE PRIVATE PRIVATE PRIVATE PRIVATE PRIVATE PRIVATE PRIVATE -->	
	
		<div id="privateContainer" style="display:none;">
			<div id="basicInfoContainer">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name1"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone1"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email1"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter your home address">Home address<span>* </span><input style="float:right;" type="text" name="home_address1" ></div><br>	
			</div>

			<div id="addressContainer">
				<div class="hint--top" data-hint="Please enter the street number, street name and town">Address of the AED <span>* </span>  <input size="40" type="text" name="address1" id="address1"></div>
				<input type="button" onclick="getMarkerAddress1()" value="Validate">
				<div id="map_container1" style="display:none;">
					<div id="addressResult1"></div>
					<div id="map-canvas1"></div>
				</div>
			</div>			
		</div>		

<!--PUBLIC PLACE PUBLIC PLACE PUBLIC PLACE PUBLIC PLACE PUBLIC PLACE PUBLIC PLACE PUBLIC PLACE -->	
		
		<div id="publicContainer" style="display:none;">
			<div id="basicInfoContainer">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Organisme name<span>* </span><input style="float:right;" type="text" name="company2"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name2"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone2"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email2"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the address of the company">Company's address<span>* </span><input style="float:right;" type="text" name="home_address2" ></div><br>	
			</div>

			<div id="addressContainer">
				<div class="hint--top" data-hint="Please enter the street number, street name and town">Address of the AED <span>* </span>  <input size="40" type="text" name="address2" id="address2"></div>
				<input type="button" onclick="getMarkerAddress2()" value="Validate">
				<div id="map_container2" style="display:none;">
					<div id="addressResult2"></div>
					<div id="map-canvas2"></div>
				</div>
			</div>			
		</div>		
			
<!--VEHICLE VEHICLE VEHICLE VEHICLE VEHICLE VEHICLE VEHICLE VEHICLE VEHICLE -->	
		
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
				<div style="width:60%;" class="hint--right" data-hint="Please enter the licence plate of the vehicle">Licence Plate No.<span>* </span><input style="float:right;" type="text" name="licencePlate3"></div><br>
			</div>
			<div id="basicInfoContainer1" style="display:none;">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Company name<span>* </span><input style="float:right;" type="text" name="company4"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name4"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone4"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email4"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the licence plate of the vehicle">Licence Plate No.<span>* </span><input style="float:right;" type="text" name="licencePlate4"></div><br>
			</div>
			<div id="basicInfoContainer2" style="display:none;">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Company name<span>* </span><input style="float:right;" type="text" name="company5"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name5"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone5"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email5"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the licence plate of the vehicle">Licence Plate No.<span>* </span><input style="float:right;" type="text" name="licencePlate5"></div><br>
			</div>
			<div id="basicInfoContainer3" style="display:none;">
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Company name<span>* </span><input style="float:right;" type="text" name="company6"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name6"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone6"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email6" ></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Please enter the licence plate of the vehicle">Licence Plate No.<span>* </span><input style="float:right;" type="text" name="licencePlate6"></div><br>
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
	