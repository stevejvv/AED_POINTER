<html>
<head>
		
	
</head>
<body>
<div >

<?php 
$times = $_POST['times'];
if ($times == 2) {
	echo '24/7';
}
else {
	echo 'Custom';
}


/*
$company= $_POST["company"];



$AED_POINTER = mysql_connect("localhost","root","orion")
or die (mysql_error());

mysql_select_db("AED_POINTER", $AED_POINTER);
$sql = "
INSERT INTO ENTRY_CONFIRM (company, name, phone, email, address, coordinates, indoor_location, mon_opening, mon_closing, tues_opening, tues_closing, wed_opening, wed_closing, thur_opening, thur_closing, fri_opening, fri_closing, sat_opening, sat_closing, sun_opening, sun_closing) 
VALUES ('$company', '$name', '$phone', '$email', '$address', 'NO COORDS', '$location', '$monOpening', '$monClosing', '$tuesOpening', '$tuesClosing', '$wedOpening', '$wedClosing', '$thurOpening', '$thurClosing', '$friOpening', '$friClosing', '$satOpening', '$satClosing', '$sunOpening', '$sunClosing')
";

mysql_query($sql, $AED_POINTER);

*/	
?>




</div>
</body>
</html>