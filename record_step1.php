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
			<li class="active">Information Générale</li>
			<li >Information sur le DEA</li>
			<li>Confirmation</li>
		</ul>
	</div>
	
<!--FORM HEADER FORM HEADER FORM HEADER FORM HEADER FORM HEADER FORM HEADER -->

	
	<div id="titles">
		<div><h1>INFORMATION GÉNÉRALE</h1></div>
		
	</div>


<!--FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM -->
	
	<form name="myForm" action="record_step2.php" method="post" enctype="multipart/form-data">

<!--FORM INITIAL TYPES FORM INITIAL TYPES FORM INITIAL TYPES FORM INITIAL TYPES -->	
		
		<div id="typeContainer">
			<div style="text-align:center;">
				<input type="radio" name="type1" value="0" onclick="initialType()"> Entreprise &nbsp;&nbsp;
				<input type="radio" name="type1" value="1" onclick="initialType()"> Particulier &nbsp;&nbsp;
				<input type="radio" name="type1" value="2" onclick="initialType()"> Lieu Public &nbsp;&nbsp;
				<input type="radio" name="type1" value="3" onclick="initialType()"> Vehicule &nbsp;&nbsp;
			</div>
		</div>

<!--COMPANY COMPANY COMPANY COMPANY COMPANY COMPANY COMPANY COMPANY COMPANY COMPANY -->	
	
		<div id="companyContainer" style="display:none;">	
			<div id="basicInfoContainer">
				<div style="width:60%;" class="hint--right" data-hint="Veuillez indiquer le nom de l'entreprise">Nom de l'entreprise<span>* </span><input style="float:right;" type="text" name="company0"></div>
				<div style="width:60%;" class="hint--right" data-hint="Veuillez indiquer le nom et prénom de la personne de contact">Personne de contact<span>* </span><input style="float:right;" type="text" name="name0"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Veuillez indiquer le numéro de téléphone de la personne de contact">Téléphone<span>* </span><input style="float:right;" type="text" name="phone0"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Veuillez indiquer l'adresse e-mail de la personne de contact">E-mail<span>* </span><input style="float:right;" type="text" name="email0" ></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Veuillez indiquer l'adresse de la personne de contact ou de l'entreprise">Adresse de la personne de contact<span>* </span><input style="float:right;" type="text" name="home_address0" ></div><br>
			</div>	
			<div id="addressContainer">
				<div class="hint--top" data-hint="Veuillez indiquer l'adresse complete du lieu ou se trouve le DEA">Address du DEA <span>* </span> <input size="40" type="text" name="address0" id="address"></div>
				<input type="button" onclick="getMarkerAddress0()" value="Valider">
				<div id="map_container0" style="display:none;">
					<div id="addressResult0"></div>
					<div id="map-canvas0"></div>
				</div>
			</div>		
		</div>
		
<!--VEHICLE VEHICLE VEHICLE VEHICLE VEHICLE VEHICLE VEHICLE VEHICLE VEHICLE -->	
		
		<div id="vehicleContainer" style="display:none;">
			<div id="vehicleTypeContainer">
				<div style="text-align:center;">
					<input  type="radio" name="type2" value="0" onclick="vehicleType()"> Particulier &nbsp;&nbsp;
					<input  type="radio" name="type2" value="1" onclick="vehicleType()"> Entreprise &nbsp;&nbsp;
					<input  type="radio" name="type2" value="2" onclick="vehicleType()">Ambulance AMU &nbsp;&nbsp;
					<input  type="radio" name="type2" value="3" onclick="vehicleType()">Ambulance Autre &nbsp;&nbsp;
				</div>
			</div>
			<div id="basicInfoContainer1" style="display:none;">
				<div style="width:60%;" class="hint--right" data-hint="Veuillez indiquer le nom de l'entreprise">Nom de l'entreprise<span>* </span><input style="float:right;" type="text" name="company1"></div>
				<div style="width:60%;" class="hint--right" data-hint="Veuillez indiquer le nom et prénom de la personne de contact">Personne de contact<span>* </span><input style="float:right;" type="text" name="name1"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Veuillez indiquer le numéro de téléphone de la personne de contact">Téléphone<span>* </span><input style="float:right;" type="text" name="phone1"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Veuillez indiquer l'adresse e-mail de la personne de contact">E-mail<span>* </span><input style="float:right;" type="text" name="email1"></div><br>
				<div style="width:60%;" class="hint--right" data-hint="Veuillez indiquez le numéro de plaque d'immatriculation du vehicule ">Numéro de plaque d'immatriculation<span>* </span><input style="float:right;" type="text" name="licencePlate1"></div><br>
			</div>	
		</div>
		
		<div id="fileContainer" style="display:none;">	
			<h2>LOGO</h2>
			Selectionez votre logo: <input type="file" name="logo">
		</div>
		
		<div id="hiddenOutput"></div>
		<div id="submitContainer" style="display:none;">
			<input id="submitButton" type="submit" name="submit" value="Aller à la deuxième étape" >		
		</div>
	</form>
	
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDSMTHUIyndywwgyws3_C34P5LognZxgLc&sensor=false"></script>
	<script src="js/form_map_v2.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/form_v3_step1.js" type="text/javascript" charset="utf-8"></script>
	
</body>
</html>
	