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
	<link rel="stylesheet" href="css/admin1.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script>

	function loadXMLDoc(theId){
		var xmlhttp;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
	  		xmlhttp=new XMLHttpRequest();
	  	} 
		else {// code for IE6, IE5
	  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
	  		if (xmlhttp.readyState==4 && xmlhttp.status==200){
	    		document.getElementById("mainContainer").innerHTML=xmlhttp.responseText;
	    	}
	  	}
		xmlhttp.open("GET","php/admin1/ajax1.php?theId="+theId,true);
		xmlhttp.send();
	}

	</script>

</head>
<body>
	<div id="logoContainer" style="text-align:center;width:100%;">
		<a href="index.php" ><img src="assets/logo.png" width="450" height="62" alt="AED-Pointer Logo"></a>		
	</div>
	
	<div id="AdminTopSpaceContainer" ></div>
	<div id="sideBar">
		<?php include 'php/admin1/admin1Initiate.php'; ?>
	</div>
	<div id="mainContainer">
		
	</div>
	<div id="submitContainer">
		<div id="theSubmitButton">Submit</div>
	</div>
	
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDSMTHUIyndywwgyws3_C34P5LognZxgLc&sensor=false"></script>
	<script src="js/adminMaps.js" type="text/javascript" charset="utf-8"></script>
	
</body>
</html>