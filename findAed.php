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
	<link rel="stylesheet" href="css/findAed.css" type="text/css" media="screen" title="no title" charset="utf-8">

	
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
<body oncload="getMarkerAddress0()">
	
	<?php include 'php/header.php';?>
	
	
	<nav class="clearfix" style="z-index:0;">
		<ul class="clearfix">
			<li><a href="#">CARTE</a></li>
			<li><a href="add_aed.php">AJOUTER UN DEA</a></li>
			<li><a href="#">LIENS</a></li>
			<li><a href="#">APPLICATION</a></li>
			<li><a href="#">EN SAVOIR +</a></li>
		</ul>
	</nav>
	
	<div id="topSpaceContainer" ></div>	
	
	<div id="controlContainer">Controls</div>
	<div id="findMapContainer">
		<div id="map-container1"></div>
	</div>
	
	
	
	
	
	
	
	
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDSMTHUIyndywwgyws3_C34P5LognZxgLc&sensor=true"></script>
	<script type="text/javascript">
	      function initialize() {
	        var mapOptions = {
	          center: new google.maps.LatLng(-34.397, 150.644),
	          zoom: 8,
			  draggable:true,
			  
	        };
	        var map = new google.maps.Map(document.getElementById("map-container1"),
	            mapOptions);
	      }
	      google.maps.event.addDomListener(window, 'load', initialize);
	    </script>
	
	<!--<script src="js/find_map.js" type="text/javascript" charset="utf-8"></script>-->
</body>

</html>