<?php include 'php/step_2/logo_upload.php'; ?>

<?php include 'php/step_2/hidden_outputs.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Form v.3 Step 2</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="icon" type="image/png" href="images/pointer.png">
	
	<link rel="stylesheet" href="lib/css/css_reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="lib/css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="lib/css/default.css" id="theme_base">
	<link rel="stylesheet" href="lib/css/hint.css" type="text/css" media="screen" title="no title" charset="utf-8">
	
	<link rel="stylesheet" href="css/index_main.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/record_step1.css" type="text/css" media="screen" title="no title" charset="utf-8">
	
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
			<li class="active">Information générale</li>
			<li class="active">Information sur le DEA</li>
			<li>Confirmation</li>
		</ul>
	</div>

<!--FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM -->

	<form name="myForm_step2"  action="../AED_POINTER/record_step3.php" method="post" enctype="multipart/form-data">
		<div id="title_step2">
			<h1>INFORMATION SUR LE DEA</h1>
		</div>
		
		<?php echo $hiddenOutputs; ?>
		<?php echo $hidden_logo; ?>
		
		<div id="categoryContainer" >
			<div style="text-align:center;">
				<div style="display:inline;" class="hint--top" data-hint="DEA qui ne permet pas de passer en mode manuel. Pour utilisateur non professionnel"><input id="type1" type="radio" name="category" value="1" checked="true"> Categorie 1 &nbsp;&nbsp;&nbsp;</div>
				<div style="display:inline;" class="hint--top" data-hint="DEA qui permet de passer en mode manuel. Pour utilisateurs professionnels"><input id="type4" type="radio" name="category" value="2"> Categorie 2 &nbsp;&nbsp;&nbsp;</div><br><br>
			</div>
			<div style="width:50%;" class="hint--right" data-hint="Veuillez indiquer la marque de votre DEA">Marque<span>*    </span><input style="float:right;" type="text" name="brand" id="brand"></div>
			<div style="width:50%;" class="hint--right" data-hint="Veuillez indiquer le  modèle de votre DEA">Modèle<span>* </span><input style="float:right;" type="text" name="deaType" id="deaType"></div>
			<div style="width:50%;" class="hint--right" data-hint="Veuillez indiquer le numero de serie de votre DEA">Numéro de série<span>*   </span><input style="float:right;" type="text" name="serial" id="serial"></div>
		</div>

		<div id="scenario1" style="display:none;">
			<div id="availability">	
				<h2>DISPONIBILITÉ :<span>* </span></h2>
				<div id="timesType">
					<input type="radio" name="timesType" value="0" onclick="timeType()" checked="true"> Préciser les heures &nbsp;&nbsp;
					<input type="radio" name="timesType" value="1" onclick="timeType()"> Toujours disponible &nbsp;&nbsp;
				</div>
				<div id="customContainer">
					<div id="mondayContainer" >
						<input type="checkbox" name="monday" id="monday" onclick="daysType()"/> Lundi
						<div id="mondayClosed" style="float:right;">Fermer</div>
						<div id="mondayInputs" style="display:none; float:right;">
							&nbsp; de &nbsp; <select name="time1"><?php include 'php/step_2/input_select.php'; ?></select>
							&nbsp; à  &nbsp; <select name="time2"><?php include 'php/step_2/input_select.php'; ?></select>
						</div>
					</div>
					<div id="tuesdayContainer" >
						<input type="checkbox" name="tuesday" id="tuesday" onclick="daysType()"/> Mardi
						<div id="tuesdayClosed" style="float:right;">Fermer</div>
						<div id="tuesdayInputs" style="display:none; float:right;">
							&nbsp; de &nbsp; <select name="time3"><?php include 'php/step_2/input_select.php'; ?></select>
							&nbsp; à  &nbsp; <select name="time4"><?php include 'php/step_2/input_select.php'; ?></select>
						</div>
					</div>
					<div id="wednesdayContainer" >
						<input type="checkbox" name="wednesday" id="wednesday" onclick="daysType()"/> Mercredi
						<div id="wednesdayClosed" style="float:right;">Fermer</div>
						<div id="wednesdayInputs" style="display:none; float:right;">
							&nbsp; de &nbsp; <select name="time5"><?php include 'php/step_2/input_select.php'; ?></select>
							&nbsp; à  &nbsp; <select name="time6"><?php include 'php/step_2/input_select.php'; ?></select>
						</div>
					</div>
					<div id="thursdayContainer" >
						<input type="checkbox" name="thursday" id="thursday" onclick="daysType()"/> Jeudi
						<div id="thursdayClosed" style="float:right;">Fermer</div>
						<div id="thursdayInputs" style="display:none; float:right;">
							&nbsp; de &nbsp; <select name="time7"><?php include 'php/step_2/input_select.php'; ?></select>
							&nbsp; à  &nbsp; <select name="time8"><?php include 'php/step_2/input_select.php'; ?></select>
						</div>
					</div>
					<div id="fridayContainer" >
						<input type="checkbox" name="friday" id="friday" onclick="daysType()"/> Vendredi
						<div id="fridayClosed" style="float:right;">Fermer</div>
						<div id="fridayInputs" style="display:none; float:right;">
							&nbsp; de &nbsp; <select name="time9"><?php include 'php/step_2/input_select.php'; ?></select>
							&nbsp; à  &nbsp; <select name="time10"><?php include 'php/step_2/input_select.php'; ?></select>
						</div>
					</div>
					<div id="saturdayContainer" >
						<input type="checkbox" name="saturday" id="saturday" onclick="daysType()"/> Samedi
						<div id="saturdayClosed" style="float:right;">Fermer</div>
						<div id="saturdayInputs" style="display:none; float:right;">
							&nbsp; de &nbsp; <select name="time11"><?php include 'php/step_2/input_select.php'; ?></select>
							&nbsp; à  &nbsp; <select name="time12"><?php include 'php/step_2/input_select.php'; ?></select>
						</div>
					</div>
					<div id="sundayContainer">
						<input type="checkbox" name="sunday" id="sunday" onclick="daysType()"/> Dimanche
						<div id="sundayClosed" style="float:right;">Fermer</div>
						<div id="sundayInputs" style="display:none; float:right;">
							&nbsp; de &nbsp; <select name="time13"><?php include 'php/step_2/input_select.php'; ?></select>
							&nbsp; à  &nbsp; <select name="time14"><?php include 'php/step_2/input_select.php'; ?></select>
						</div>
					</div>
				</div>
				<div id="fullTimeContainer" style="display:none; text-align:center; color:#fc0d1b">Le DEA est disponible tout le temps (24/7)
				</div>
				<div id="lunchTime" style="padding-top:10px;">Le DEA est-il disponible durant les heures de repas?
					<input type="radio" name="lunchTime" value="Yes"> Oui &nbsp;
					<input type="radio" name="lunchTime" value="No" > Non &nbsp;
				</div>
				<div id="bankHolidays">Le DEA est-il disponible durant les jours fériés?
					<input type="radio" name="bankHolidays" value="Yes"> Oui &nbsp;
					<input type="radio" name="bankHolidays" value="No" > Non &nbsp;
				</div>
			</div>
			<div id="descriptionContainer">
				<h2>EMPLACEMENT DU DEA: <span>* </span></h2>
				<textarea  name="description" id="description" placeholder="Décrire avec précision ou se situe le DEA dans votre environnement afin d'y accéder facilement. (mention d'étage, particularité de l'endroit,...)"></textarea>
			</div>
		</div>

		<div id="confidentialityContainer">
			<h2>CONFIDENTIALITÉ <span>* </span></h2>
			<div>Let the AED be accessible to the public :&nbsp;
			<input type="radio" name="accessibility" value="accessible"> Yes &nbsp;&nbsp;
			<input type="radio" name="accessibility" value="unaccessible"> No
			</div>
		</div>
		<div id="fileContainer">	
			<h2>IMAGE<span>* </span></h2>
			Select a file: <input type="file" name="img">
		</div>

		<div id="submitConainer">
			<input type="submit" value="Go to step 3" >		
		</div>
	</form>
	
	
	
	
<script src="lib/js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>	
<script src="js/form_v3_step2.js" type="text/javascript" charset="utf-8"></script>

<script>
	if (document.getElementById('hiddenType1').value== 0 || document.getElementById('hiddenType1').value==  1 || document.getElementById('hiddenType1').value== 2) {
	      document.getElementById('scenario1').style.display = "block";
	}

</script>

<script>
	//SHOWS IMAGE ON PAGE

//	function readURL(input) {
//	        if (input.files && input.files[0]) {
//	            var reader = new FileReader();

//	            reader.onload = function (e) {
//	                $('#blah').attr('src', e.target.result);
//	            }
//	            reader.readAsDataURL(input.files[0]);
//	        }
//	    }
//	    $("#imgInp").change(function(){
//	        readURL(this);
//	    });
</script>

</body>
</html>