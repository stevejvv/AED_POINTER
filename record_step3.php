<?php 
error_reporting(E_ALL);

if ($_POST['type1'] == 0 or $_POST['type1'] == 1 or $_POST['type1'] == 2) {
	include 'php/step_3/type1_0.php';
}
else  {	 	
	include 'php/step_3/type1_3_0.php';						
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirm</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="icon" type="image/png" href="images/pointer.png">
	
	<link rel="stylesheet" href="lib/css/css_reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="lib/css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
	
	<link rel="stylesheet" href="css/index_main.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/record_step1.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/record_step3.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="lib/js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>


</head>
<body>
	
	<?php include 'php/header.php';?>
	
	<nav class="clearfix">
		<ul class="clearfix">
			
		</ul>
	</nav>
	<div id="topSpaceContainer"></div>
	<div id="msform">
		<ul id="progressbar">
			<li class="active">Informations générales</li>
			<li class="active">Informations sur le DEA</li>
			<li class="active">Validation</li>
		</ul>
	</div>
	
	<?php include 'php/step_3/file_upload.php'; ?> 

	
	<div id="alert_submit"><span>Note</span>: Vous devez appuyer sur le bouton de validation en bas de la page afin de soumettre votre formulaire
	</div>
<div id="theBigContainer">
	<div id="confirmBodyContainer" style="display:none">
		<div class="sectionTitle">INFORMATION DE CONTACT</div>
		<img id="thumbnail" src="image_database/<?php echo $logo_name ?>" >		
		
		<div id="step_3_basic_info_container">
			<div id="companyVisible" class="step_3_items"><span>Entreprise: </span><?php echo $company; ?></div>
			<div class="step_3_items"><span>Personne de contact: </span><?php echo $name; ?></div>
			<div class="step_3_items"><span>Téléphone: </span><?php echo $phone; ?></div>
			<div class="step_3_items"><span>E-mail: </span><?php echo $email; ?></div>
			<div class="step_3_items"><span>Adresse: </span><?php echo $homeAddress; ?></div>
		</div>

		<div class="sectionContainers">
			<div class="sectionTitle">ADRESSE DU DEA</div>
			<div style="float:left; width:100%;">
				<div class="step_3_items_left"><?php echo $fullAddress; ?></div>
				<div class="step_3_items_right"><span>Lat: </span> <span id="theLat"><?php echo $Lat; ?></span></div>
				<div class="step_3_items_right"><span>Lng: </span><span  id="theLng"><?php echo $Lng; ?></span></div>
				<div class="step_3_boxedItem"><div class="infoSign">i</div> Vous pouvez déplacer le pointeur sur la carte si il n'est pas placé correctement </div>
			</div>
			<div class="result_map">
				<div id="map-canvas"></div>
			</div>
		</div>


		<div class="sectionContainers">
			<div class="sectionTitle">DESCRIPTION</div>
			<div style="float:left; width:55%;">
				<div class="step_3_items"><span>Description de la localisation du DEA: </span><?php echo $description; ?></div>
				<div class="step_3_items"><span>Accessibilité au public: </span><?php echo $accessibleAuPublicString; ?></div>
			</div>
			<img id="thumbnail2" src="image_database/<?php echo $str2; ?>" >	
		</div>
		
		<div class="sectionContainers">
			<div class="sectionTitle">DISPONIBILITÉ DU DEA</div>
			<div id="step_3_availability_info_times"><?php echo $times_output; ?></div>
			<div class="step_3_items"><span>   Temps de midi: </span><?php echo $lunchTimeString; ?></div>
			<div class="step_3_items"><span>Jours fériés: </span><?php echo $bankHolidaysString; ?></div>
			<div class="step_3_items"><span>Vacances scolaires: </span><?php echo $schoolHolidaysString; ?></div>
			<div class="step_3_items"><span>Autres Informations: </span><?php echo $autreInfoDispo; ?></div>
		</div>
		
		<div class="sectionContainers">
			<div class="sectionTitle">INFORMATIONS SUR LE DEA</div>	
			<div class="step_3_items"><span> Catégorie: </span><?php echo $category; ?></div>
			<div class="step_3_items"><span> Marque: </span><?php echo $brand; ?></div>
			<div class="step_3_items"><span> Modèle: </span><?php echo $deaType; ?></div>
			<div class="step_3_items"><span> No. de série: </span><?php echo $serial; ?></div>					
		</div>
		
		<div class="sectionContainers">
			<div class="sectionTitle">CONFIDENTIALITÉ</div>
			<div class="step_3_items"><span>Publier sur AED-Pointer: </span><?php echo $accessibilityString; ?></div>
		</div>
	</div>
	
	
	
	
	<div id="confirmBodyContainer1" style="display:none">
		<div class="sectionTitle">INFORMATION DE CONTACT</div>
		<img id="thumbnail" src="image_database/<?php echo $logo_name ?>" >	
		<div id="step_3_basic_info_container">
			<div class="step_3_items"><span>Entreprise: </span><?php echo $company; ?></div>
			<div class="step_3_items"><span>Personne de contact: </span><?php echo $name; ?></div>
			<div class="step_3_items"><span>Téléphone: </span><?php echo $phone; ?></div>
			<div class="step_3_items"><span>E-mail: </span><?php echo $email; ?></div>
			<div class="step_3_items"><span>Licence plate No.: </span><?php echo $licencePlate; ?></div>
		</div>
		
		<div class="sectionContainers">
			<div class="sectionTitle">ADRESSE DU DEA</div>
			<div style="float:left; width:100%;">
				<div class="step_3_items_left"><?php echo $fullAddress; ?></div>
				<div class="step_3_items_right"><span>Lat: </span> <span id="theLat1"><?php echo $Lat; ?></span></div>
				<div class="step_3_items_right"><span>Lng: </span><span  id="theLng1"><?php echo $Lng; ?></span></div>
				<div class="step_3_boxedItem"><div class="infoSign">i</div> Vous pouvez déplacer le pointeur sur la carte si il n'est pas placé correctement </div>
			</div>
			<div class="result_map">
				<div id="map-canvas1"></div>
			</div>
		</div>
		
		<div class="sectionContainers">
			<div class="sectionTitle">INFORMATIONS SUR LE DEA</div>	
			<div class="step_3_items"><span> Catégorie: </span><?php echo $category; ?></div>
			<div class="step_3_items"><span> Marque: </span><?php echo $brand; ?></div>
			<div class="step_3_items"><span> Modèle: </span><?php echo $deaType; ?></div>
			<div class="step_3_items"><span> No. de série: </span><?php echo $serial; ?></div>					
		</div>
		
		<div class="sectionContainers">
			<div class="sectionTitle">PUBLICATION</div>
			<div class="step_3_items"><span>Publier sur AED-Pointer: </span><?php echo $accessibilityString; ?></div>
		</div>
	</div>	
	
	<form name="myForm" action="record_step4.php" onsubmit="return validateForm()" method="post">	
		<?php echo $hiddenInputs; ?>

		
		<input type="hidden"  name="image" value="<?php echo $str2; ?>">

		<div id="step3_submitContainer">		
			<input id="submitButton" type="submit" value="VALIDER" >		
		</div>	
	</form>
</div>	
<div style="width:100%; height:50px;">
	
	
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDSMTHUIyndywwgyws3_C34P5LognZxgLc&sensor=false"></script>
	<script src="js/record_step3_map.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/validation_step3.js" type="text/javascript" charset="utf-8"></script>
	
	<script>
		if (document.getElementById('hiddenType1').value== 0 || document.getElementById('hiddenType1').value==  1 || document.getElementById('hiddenType1').value== 2) {
		      document.getElementById('confirmBodyContainer').style.display = "block";
		}
		else {
			 document.getElementById('confirmBodyContainer1').style.display = "block";
		}
		
		if (document.getElementById('hiddenType1').value== 1) {
		      document.getElementById('companyVisible').style.display = "none";
		}
		else {
			 document.getElementById('companyVisible').style.display = "block";
		}
	</script>
</body>
</html>