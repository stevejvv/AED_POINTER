<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Record AED</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="icon" type="image/png" href="images/pointer.png">
		
	<link rel="stylesheet" href="lib/css/css_reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="lib/css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
	
	<link rel="stylesheet" href="css/index_main.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/record.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="lib/js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>

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
		
	<div id="bodyContainer">
		<img id="aj_dea_bg" src="images/aj_dea_bg.jpg">
		<div id="body_inner_container">
			<span>Aidez-nous à recenser les DEA de nos régions !</span><br /><br />
			En ajoutant un DEA sur AED-Pointer.eu ou sur l'application AED-POINTER il devient visible sur la carte et accesible pour le public et les services de secours 112.<br /><br />
			Tout le monde peut ajouter un DEA, il sera disponilbe sur le site après validation. Choisissez en cliquant sur une des 2 possibilitées suivante  :
		</div>
		
		<div style="float:right; width:100%; height: 10px;"></div>
		
		<div id="indicateContainer">
			<a href="#"><div id="indicateHeader"><img  src="assets/icon_aj_dea.png" style="margin:5px 0px;"><br /> Vous constatez la présence d'un DEA (dans votre salle de sport, dans un lieu public...). Signaler le nous !</div></a>
			<div id="indicateFooter">SIGNALER UN DEA</div>
		</div>
		<div id="recordContainer">
			<a href="record_step1.php" title="form_v2"><div id="recordHeader"><img  src="assets/icon_aj_dea.png" style="margin:5px 0px;"><br />Vous posséder un DEA. Enregistrer le ici !</div></a>
			<div id="recordFooter">ENREGISTRER VOTRE DEA</div>
		</div>
		
	</div>
	
	<div id="footer">
		<ul>
			<li>RESPONSABILITÉ</li>
			<li>MENTIONS LÉGALES </li>
			<li>CONTACT</li>
		</ul>	
	</div>
</body>

</html>