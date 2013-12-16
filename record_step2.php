<?php 

if ($_POST['type1'] == 0) {
	
	$hiddenOutputs = '   
	<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
	
	<input type="hidden"  name="company"  value="'.$_POST['company0'].'">
	<input type="hidden"  name="name"     value="'.$_POST['name0'].'">
	<input type="hidden"  name="phone"    value="'.$_POST['phone0'].'">
	<input type="hidden"  name="email"    value="'.$_POST['email0'].'">
	
	<input type="hidden"  name="fullAddress"  value="'.$_POST['fullAddress'].'">
	<input type="hidden"  name="country"      value="'.$_POST['country'].'">
	<input type="hidden"  name="Lat"          value="'.$_POST['Lat'].'">	
	<input type="hidden"  name="Lng"          value="'.$_POST['Lng'].'">
	';
	
}

else if ($_POST['type1'] == 1) {
	
	$hiddenOutputs = '   
	<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
	
	<input type="hidden"  name="name"     value="'.$_POST['name1'].'">
	<input type="hidden"  name="phone"    value="'.$_POST['phone1'].'">
	<input type="hidden"  name="email"    value="'.$_POST['email1'].'">
	
	<input type="hidden"  name="fullAddress"  value="'.$_POST['fullAddress'].'">
	<input type="hidden"  name="country"      value="'.$_POST['country'].'">
	<input type="hidden"  name="Lat"          value="'.$_POST['Lat'].'">	
	<input type="hidden"  name="Lng"          value="'.$_POST['Lng'].'">
	';

}

else if ($_POST['type1'] == 2) {
	
	$hiddenOutputs = '   
	<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
	
	<input type="hidden"  name="company"  value="'.$_POST['company2'].'">
	<input type="hidden"  name="name"     value="'.$_POST['name2'].'">
	<input type="hidden"  name="phone"    value="'.$_POST['phone2'].'">
	<input type="hidden"  name="email"    value="'.$_POST['email2'].'">
	
	<input type="hidden"  name="fullAddress"  value="'.$_POST['fullAddress'].'">
	<input type="hidden"  name="country"      value="'.$_POST['country'].'">
	<input type="hidden"  name="Lat"          value="'.$_POST['Lat'].'">	
	<input type="hidden"  name="Lng"          value="'.$_POST['Lng'].'">
	';

}

else if ($_POST['type1'] == 3) {
	 
	if ($_POST['type2'] == 0) {	
		
		$output      = "vehicle Private";
		
		$hiddenOutputs = '   
		<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
		<input type="hidden"  name="type2"    value="'.$_POST['type2'].'">
							
		<input type="hidden"  name="name"     		value="'.$_POST['name3'].'">
		<input type="hidden"  name="phone"    		value="'.$_POST['phone3'].'">
		<input type="hidden"  name="email"    		value="'.$_POST['email3'].'">
		<input type="hidden"  name="LicencePlate"   value="'.$_POST['LicencePlate3'].'">
		';
		
	}
	else if ($_POST['type2'] == 1) {
		
		$hiddenOutputs = '   
		<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
		<input type="hidden"  name="type2"    value="'.$_POST['type2'].'">
							
		<input type="hidden"  name="company"  value="'.$_POST['company4'].'">
		<input type="hidden"  name="name"     value="'.$_POST['name4'].'">
		<input type="hidden"  name="phone"    value="'.$_POST['phone4'].'">
		<input type="hidden"  name="email"    value="'.$_POST['email4'].'">
		<input type="hidden"  name="LicencePlate"  value="'.$_POST['LicencePlate4'].'">
		';
		
		
	}
	else if ($_POST['type2'] == 2) {
		
		$hiddenOutputs = '   
		<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
		<input type="hidden"  name="type2"    value="'.$_POST['type2'].'">
							
		<input type="hidden"  name="company"  value="'.$_POST['company5'].'">
		<input type="hidden"  name="name"     value="'.$_POST['name5'].'">
		<input type="hidden"  name="phone"    value="'.$_POST['phone5'].'">
		<input type="hidden"  name="email"    value="'.$_POST['email5'].'">
		<input type="hidden"  name="LicencePlate"  value="'.$_POST['LicencePlate5'].'">
		';
		
		
	}
	else if ($_POST['type2'] == 3) {	
		
		$hiddenOutputs = '   
		<input type="hidden"  name="type1"    value="'.$_POST['type1'].'">
		<input type="hidden"  name="type2"    value="'.$_POST['type2'].'">
							
		<input type="hidden"  name="company"  		value="'.$_POST['company6'].'">
		<input type="hidden"  name="name"    	 	value="'.$_POST['name6'].'">
		<input type="hidden"  name="phone"    		value="'.$_POST['phone6'].'">
		<input type="hidden"  name="email"    		value="'.$_POST['email6'].'">
		<input type="hidden"  name="LicencePlate"  value="'.$_POST['LicencePlate6'].'">
		';	
	}
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Form v.3 Step 2</title>
	<link rel="stylesheet" href="css/css_reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<link rel="stylesheet" href="lib/default.css" id="theme_base">
	<link rel="stylesheet" href="lib/default.time.css" id="theme_time">
	<link rel="stylesheet" href="css/index_main.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/form_v3_step1.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="lib/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
		
	
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
			<li class="active">information on the AED</li>
			<li>Confirmation</li>
		</ul>
	</div>

<!--FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM FORM -->

	<form name="myForm_step2"  action="../AED_POINTER/record_step3.php" method="post" enctype="multipart/form-data">
		<div id="title_step2">
			<h1>INFORMATION SUR LE DEA</h1>
			</div>
	
<?php echo $hiddenOutputs ?>

<?php
if ($_POST['type1'] == 0 or $_POST['type1'] == 1 or $_POST['type1'] == 2) {
	include 'php/step_2/type123.php';
}
else {
	include 'php/step_2/type4.php';
}
 ?>


	<div id="submitConainer">
		<input type="submit" value="Go to step 3" >		
	</div>
	
	</form>
	
	
<script src="lib/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>	
<script src="lib/picker.js"></script>
<script src="lib/picker.date.js"></script>
<script src="lib/picker.time.js"></script>
<script src="lib/main.js"></script>
<script src="js/form_v3_step2.js" type="text/javascript" charset="utf-8"></script>

<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
</script>

</body>
</html>