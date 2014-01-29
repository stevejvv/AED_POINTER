<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>AED-Pointer.eu</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="icon" type="image/png" href="images/pointer.png">

	<link rel="stylesheet" href="lib/css/css_reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="lib/css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="lib/css/flexslider.css" type="text/css" media="screen" title="no title" charset="utf-8">
	
	<link rel="stylesheet" href="css/index_main.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="lib/js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="lib/js/jquery.flexslider-min.js"></script>
	
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide",
			slideshowSpeed: 7000,        
			animationSpeed: 1000,
			controlNav: false, 
			direction: "horizontal"
		  });
		});
	</script>
	
</head>
<body>
	<?php include 'php/header.php';?>
	
	
	<nav class="clearfix" style="z-index:0;">
		<ul class="clearfix">
			<li><a href="findAed.php">CARTE</a></li>
			<li><a href="add_aed.php">AJOUTER UN DEA</a></li>
			<li><a href="#">LIENS</a></li>
			<li><a href="#">APPLICATION</a></li>
			<li><a href="#">EN SAVOIR +</a></li>
		</ul>
	</nav>
	
	<div id="topSpaceContainer" ></div>	
	
	<div class="flexslider" style="z-index:-1;">
	  <ul class="slides">
	    <li style="position:relative">
		  <div id="slide1_text"><span>Decouvrez les DEA de votre région!</span><br/><br/>

		Grâce à AED-POINTER, découvrez les emplacements des Défibrillateurs Externes Automatisés sur une carte. Vérifier s'y il y en a prêt de chez vous, de chez vos proches ou encore de votre travail ou des lieux que vous fréquentez… Cela peut sauver des vies !!!
	      </div>
			  <img src="images/map background2.png" >
	     </li>
	    <li>
		  <img src="images/slide_bg2.jpg">
	    </li>
		<li>
		  <img src="images/intro ajouter dea.jpg">
	    </li>
	  </ul>
	</div>
	
	<div id="underText">L’ARRÊT CARDIAQUE... NOUS SOMMES TOUS CONCERNÉS ! Chaque année 2500 personnes sont victimes d’un arrêt cardiaque dans l’Eurégio Meuse-Rhin.
	</div>
	<ul id="preFooter">
		<li>
			<img src="images/logo_interreg&amp;emgency.png">
		</li>
		<li><div><span>Quesqu’un DEA ?</span><br /><br />
				Piet vernatur? Ximus, suntiumenis dia nonse esenihillam volecab ipis reped que officil iquaectem quam qui destem que volorit audit resedi verehendis suntiaes mos verum a imusdam, <br /><br />
				<a href="#">lire la suite</a>
			</div>
		</li>
		<li>
			<div>	<span>Qui sommes nous ?</span><br /><br />
			Piet vernatur? Ximus, suntiumenis dia nonse esenihillam volecab ipis reped que officil iquaectem quam qui destem que volorit audit <br /><br />
				<a href="#">lire la suite</a>
			</div>
		</li>
		<li>		
			<div><span>Cliquez "j'aime"</span><br /><br />
			Soutenez-nous grâce à Facebook<br /><br />
			<img id="fb"src="images/facebook_like_buton nb.png">
			</div>
		</li>
	</ul>
	<div id="footerSpace"> </div>
	<div id="footer">
		<ul>
			<li><a href="admin1.php">ADMIN</a></li>
			<li><a href="#">RESPONSABILITÉ</a></li>
			<li><a href="#">MENTIONS LÉGALES </a></li>
			<li><a href="#">CONTACT </li></a>
		</ul>	
	</div>
</body>

</html>