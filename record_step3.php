<?php 
if ($_POST['type1'] == 0) {
	include 'php/step_3/type1_0.php';
}
else if ($_POST['type1'] == 1) {
	include 'php/step_3/type1_1.php';	
}
else if ($_POST['type1'] == 2) {	
	include 'php/step_3/type1_2.php';	
}
else if ($_POST['type1'] == 3) {	 
	if ($_POST['type2'] == 0) {			
		include 'php/step_3/type1_3_0.php';				
	}
	else if ($_POST['type2'] == 1) {	
		include 'php/step_3/type1_3_1.php';			
	}
	else if ($_POST['type2'] == 2) {		
		include 'php/step_3/type1_3_2.php';		
	}
	else if ($_POST['type2'] == 3) {			
		include 'php/step_3/type1_3_3.php';		
	}	
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
			<li><a href="#">CARTE</a></li>
			<li><a href="add_aed.html">AJOUTER UN DEA</a></li>
			<li><a href="#">LIENS</a></li>
			<li><a href="#">APPLICATION</a></li>
			<li><a href="#">EN SAVOIR +</a></li>
		</ul>
	</nav>
	<div id="topSpaceContainer"></div>
	<div id="msform">
		<ul id="progressbar">
			<li class="active">Personal information</li>
			<li class="active">information on the AED</li>
			<li class="active">Confirmation</li>
		</ul>
	</div>
	
	<?php include 'php/file_upload.php'; ?> 

	
	<div id="alert_submit"><span>Note</span>: You need to press the validate button at the bottom of the page in order to submit your application</div>
	<div id="confirmBodyContainer">
		<img id="thumbnail" src="results/<?php echo "$image_underscore_name.jpeg" ?>" >		
		<?php echo $visibleOutput; ?>	
	</div>	
	<form name="myForm" action="" method="post">	
		<?php echo $hiddenInputs; ?>
		<input type="hidden"  name="imageDirectory" value="<?php if (isset($thumbnail)) {echo $thumbnail;}?>">
		<div id="submitContainer">
			
			<input id="submitButton" type="submit" value="SUBMIT" >		
		</div>	
	</form>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDSMTHUIyndywwgyws3_C34P5LognZxgLc&sensor=false"></script>
	<script src="js/record_step3_map.js" type="text/javascript" charset="utf-8"></script>
	
</body>
</html>