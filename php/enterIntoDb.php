<?php
$name         = $_POST['name'];
$company      = $_POST['company'];
$phone        = $_POST['phone'];
$email        = $_POST['email'];

$address      = $_POST['fullAddress'];

$country      = $_POST['country'];
$Lat          = $_POST['Lat'];
$Lng          = $_POST['Lng'];


$time1        = $_POST['time1'];
$time2        = $_POST['time2'];
$time3        = $_POST['time3'];
$time4        = $_POST['time4'];
$time5        = $_POST['time5'];
$time6        = $_POST['time6'];
$time7        = $_POST['time7'];
$time8        = $_POST['time8'];
$time9        = $_POST['time9'];
$time10       = $_POST['time10'];
$time11       = $_POST['time11'];
$time12       = $_POST['time12'];
$time13       = $_POST['time11'];
$time14       = $_POST['time12'];

$description  = $_POST['description'];


$AED_POINTER = mysql_connect("localhost","root","orion")
or die (mysql_error());

mysql_select_db("AED_POINTER", $AED_POINTER);
$sql = "
INSERT INTO tempDb (name, company,phone,email,address,streetNumber,route,town,postalCode,country,Lat,Lng,time1,time2,time3,time4,time5,time6,time7,time8,time9,time10,time11,time12,time13,time14,description) VALUES ('$name','$company','$phone','$email','$address','$streetNumber','$route','$town','$postalCode','$country','$Lat','$Lng','$time1','$time2','$time3','$time4','$time5','$time6','$time7','$time8','$time9','$time10','$time11','$time12','$time13','$time14','$description')
";

mysql_query($sql, $AED_POINTER);	
	













?>
<html>
<head>
		
	
</head>
<body>
Your registration has been successful. 
</body>
</html>