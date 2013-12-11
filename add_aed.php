<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Record AED</title>
<link rel="stylesheet" href="css/css_reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/record.css" type="text/css" media="screen" title="no title" charset="utf-8">

<link rel="stylesheet" href="css/index_main.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="icon" type="image/png" href="images/pointer.png">
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
	<div id="bodyContainer">
		<div id="body_inner_container">
			<span>Aidez-nous à recenser les DEA de nos régions !</span><br /><br />

			En ajoutant un DEA sur AED-Pointer.eu ou sur l'application AED-POINTER il devient visible sur la carte et accesible pour le public et les services de secours 112.<br /><br />

			Tout le monde peut ajouter un DEA, il sera disponilbe sur le site après validation. Choisissez en cliquant sur une des 2 possibilitées suivante  :
		</div>
		
		<div id="recordContainer">
			<div class="arrow">&#8595;</div>
			<a href="record_step1.php" title="form_v2"><div id="recordHeader">ENREGISTRER VOTRE DEA</div></a>
			<div id="recordFooter">Vous posséder un DEA. Enregistrer le ici !</div>
		</div>
		<div id="indicateContainer">
			<div class="arrow">&#8595;</div>
			<a href="#"><div id="indicateHeader">SIGNALER UN DEA</div></a>
			<div id="indicateFooter">Vous constatez la présence d'un DEA (dans votre salle de sport, lors d'une sortie, dans un lieu public...). Signaler le nous !</div>
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