<?php
//ALTER TABLE mytable AUTO_INCREMENT = 1

header ('Content-type: text/html; charset=utf-8');

$type1 = $_POST['type1'];
$type2 = $_POST['type2'];

$company = $_POST['company'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$fullAddress = $_POST['fullAddress'];
$country = $_POST['country'];
$Lat = $_POST['Lat'];
$Lng = $_POST['Lng'];

$homeAddress = $_POST['home_address'];

$category = $_POST['category'];
$brand = $_POST['brand'];
$deaType = $_POST['deaType'];
$serial = $_POST['serial'];

$timesType = $_POST['timesType'];
$monday = $_POST['monday'];
$time1 = $_POST['time1'];
$time2 = $_POST['time2'];
$tuesday = $_POST['tuesday'];
$time3 = $_POST['time3'];
$time4 = $_POST['time4'];
$wednesday = $_POST['wednesday'];
$time5 = $_POST['time5'];
$time6 = $_POST['time6'];
$thursday = $_POST['thursday'];
$time7 = $_POST['time7'];
$time8 = $_POST['time8'];
$friday = $_POST['friday'];
$time9 = $_POST['time9'];
$time10 = $_POST['time10'];
$saturday = $_POST['saturday'];
$time11 = $_POST['time11'];
$time12 = $_POST['time12'];
$sunday = $_POST['sunday'];
$time13 = $_POST['time13'];
$time14 = $_POST['time14'];

$variableTime = $_POST['variableTime'];

$lunchTime =    $_POST['lunchTime'];
$lunchTimeClose =    $_POST['lunchTimeClose'];
$lunchTimeOpen =    $_POST['lunchTimeOpen'];

$bankHolidays = $_POST['bankHolidays'];
$schoolHolidays = $_POST['schoolHolidays'];

$description =  $_POST['description'];
$accessibleAuPublic =  $_POST['accessibleAuPublic'];
$auPublicNonDescription =  $_POST['auPublicNonDescription'];

$accessibility = $_POST['accessibility'];
$logo_name = $_POST['logo_name'];
$image = $_POST['image'];





$AED_POINTER = mysql_connect("localhost","root","orion")
or die (mysql_error());

mysql_select_db("AED_POINTER", $AED_POINTER);
mysql_set_charset("utf8");
$sql = "
INSERT INTO tempDb (type1, type2, company, name, phone, email, fullAddress, country, Lat, Lng, home_address, category, brand, deaType, serial, timesType, monday, time1, time2, tuesday, time3, time4, wednesday, time5,time6, thursday, time7,time8, friday, time9,time10, saturday, time11,time12, sunday, time13,time14, variableTime, lunchTime, lunchTimeClose, lunchTimeOpen, bankHolidays, schoolHolidays, description, accessibleAuPublic, auPublicNonDescription, accessibility, logo_name, image) VALUES ('$type1','$type2', '$company', '$name', '$phone', '$email', '$fullAddress', '$country', '$Lat', '$Lng', '$homeAddress', '$category', '$brand', '$deaType', '$serial', '$timesType', '$monday', '$time1', '$time2', '$tuesday', '$time3', '$time4', '$wednesday', '$time5', '$time6', '$thursday', '$time7','$time8', '$friday', '$time9','$time10', '$saturday', '$time11','$time12', '$sunday', '$time13','$time14', '$variableTime', '$lunchTime', '$lunchTimeClose', '$lunchTimeOpen', '$bankHolidays', '$schoolHolidays', '$description', '$accessibleAuPublic', '$auPublicNonDescription', '$accessibility', '$logo_name', '$image')
";



$result = mysql_query("SELECT * FROM tempDb", $AED_POINTER);
$num_rows = mysql_num_rows($result);



mysql_query($sql, $AED_POINTER);	
	

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
	Your registration has been successful. 	<?php echo "Number of rows: ".$num_rows?>;
	
	
</body>
</html>