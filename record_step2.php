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
	<link rel="stylesheet" href="lib/css/default.time.css" id="theme_time">
	
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
	
	
<script src="lib/js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>	
<script src="lib/js/picker.js"></script>
<script src="lib/js/picker.date.js"></script>
<script src="lib/js/picker.time.js"></script>
<script src="lib/js/main.js"></script>

<script src="js/form_v3_step2.js" type="text/javascript" charset="utf-8"></script>

<script>
	//SHOWS IMAGE ON PAGE

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