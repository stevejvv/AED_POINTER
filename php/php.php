<?php 
$name         = $_POST['name'];
$company      = $_POST['company'];
$phone        = $_POST['phone'];
$email        = $_POST['email'];
$address      = $_POST['fullAddress'];

$times        = $_POST['times'];
$monday       = $_POST['monday'];
$time1        = $_POST['time1'];
$time2        = $_POST['time2'];
$tuesday      = $_POST['tuesday'];
$time3        = $_POST['time3'];
$time4        = $_POST['time4'];
$wednesday    = $_POST['wednesday'];
$time5        = $_POST['time5'];
$time6        = $_POST['time6'];
$thursday     = $_POST['thursday'];
$time7        = $_POST['time7'];
$time8        = $_POST['time8'];
$friday       = $_POST['friday'];
$time9        = $_POST['time9'];
$time10       = $_POST['time10'];
$saturday     = $_POST['saturday'];
$time11       = $_POST['time11'];
$time12       = $_POST['time12'];
$sunday       = $_POST['saturday'];
$time13       = $_POST['time11'];
$time14       = $_POST['time12'];

$description  = $_POST['description'];


$country      = $_POST['country'];
$Lat          = $_POST['Lat'];
$Lng          = $_POST['Lng'];

$availabilities;

$mondayOpened;
$tuesdayOpened;
$wednesdayOpened;
$thursdayOpened;
$fridayOpened;
$saturdayOpened;
$sundayOpened;


if ($times == 2) {
	$availabilities = 'Opened all the time';
	
	$mondayOpened[0] = 		"00:01";
	$mondayOpened[1] = 		"00:00";
	$tuesdayOpened[0] = 	"00:01";
	$tuesdayOpened[1] = 	"00:00";
	$wednesdayOpened[0] = 	"00:01";
	$wednesdayOpened[1] =	"00:00";
	$thursdayOpened[0] = 	"00:01";
	$thursdayOpened[1] = 	"00:00";
	$fridayOpened[0] = 		"00:01";
	$fridayOpened[1] = 		"00:00";
	$saturdayOpened[0] = 	"00:01";
	$saturdayOpened[1] =	"00:00";
	$sundayOpened[0] = 		"00:01";
	$sundayOpened[1] = 		"00:00";
	
}

if ($times == 1) {
	if ($monday == 'on') {
		$mondayOpened[0] = $time1;
		$mondayOpened[1] = $time2;
	} else {
		$mondayOpened[0] = "Closed";
		$mondayOpened[1] = "Closed";
	}
	if ($tuesday == 'on') {
		$tuesdayOpened[0] = $time3;
		$tuesdayOpened[1] = $time4;
	}
	else {
		$tuesdayOpened[0] = "Closed";
		$tuesdayOpened[1] = "Closed";
	}
	if ($wednesday == 'on') {
		$wednesdayOpened[0] = $time5;
		$wednesdayOpened[1] = $time6;
	}
	else {
		$wednesdayOpened[0] = "Closed";
		$wednesdayOpened[1] = "Closed";
	}
	if ($thursday == 'on') {
		$thursdayOpened[0] = $time7;
		$thursdayOpened[1] = $time8;
	}
	else {
		$thursdayOpened[0] = "Closed";
		$thursdayOpened[1] = "Closed";
	}
	if ($friday == 'on') {
		$fridayOpened[0] = $time9;
		$fridayOpened[1] = $time10;
	}
	else {
		$fridayOpened[0] = "Closed";
		$fridayOpened[1] = "Closed";
	}
	if ($saturday == 'on') {
		$saturdayOpened[0] = $time11;
		$saturdayOpened[1] = $time12;
	}
	else {
		$saturdayOpened[0] = "Closed";
		$saturdayOpened[1] = "Closed";
	}
	if ($sunday == 'on') {
		$sundayOpened[0] = $time13;
		$sundayOpened[1] = $time14;
	}
	else {
		$sundayOpened[0] = "Closed";
		$sundayOpened[1] = "Closed";
	}
	
	$availabilities = '
		<table border="1">
		<tr>
			<th></th>
			<th>Opens</th>
			<th>Closes</th>
		</tr>
		<tr>
			<td>Monday</td>
			<td>'.$mondayOpened[0].'</td>
			<td>'.$mondayOpened[1].'</td>
		</tr>
		<tr>
			<td>Tuesday</td>
			<td>'.$tuesdayOpened[0].'</td>
			<td>'.$tuesdayOpened[1].'</td>
		</tr>
		<tr>
			<td>Wednesday</td>
			<td>'.$wednesdayOpened[0].'</td>
			<td>'.$wednesdayOpened[1].'</td>
		</tr>
		<tr>
			<td>Thursday</td>
			<td>'.$thursdayOpened[0].'</td>
			<td>'.$thursdayOpened[1].'</td>
		</tr>
		<tr>
			<td>Friday</td>
			<td>'.$fridayOpened[0].'</td>
			<td>'.$fridayOpened[1].'</td>
		</tr>
		<tr>
			<td>Saturday</td>
			<td>'.$saturdayOpened[0].'</td>
			<td>'.$saturdayOpened[1].'</td>
		</tr>
		<tr>
			<td>Sunday</td>
			<td>'.$sundayOpened[0].'</td>
			<td>'.$sundayOpened[1].'</td>
		</tr>

		</table>
	';
}

?>


<html>
<head>
		
	
</head>
<body>
<div id="bodyContainer">
	<div id="name"><?php echo $name?></div>
	<div id="company"><?php echo $company?></div>
	<div id="phone"><?php echo $phone?></div>
	<div id="email"><?php echo $email?></div>
	<div id="address"><?php echo $address?></div>
	<div id="map-canvas"></div>
	<div id="times"><?php echo $availabilities?></div>
	<div id="description"><?php echo $description?></div>
</div>
<form action="enterIntoDb.php" method="post" name="confirmform">
	<input type="hidden"  name="name"  value="<?php echo $name?>">
	<input type="hidden"  name="company"  value="<?php echo $company?>">
	<input type="hidden"  name="phone"  value="<?php echo $phone?>">
	<input type="hidden"  name="email"  value="<?php echo $email?>">
	
	<input type="hidden"  name="address"  value="<?php echo $address?>">
	
	<input type="hidden"  name="country"  value="<?php echo $country?>">
	<input type="hidden"  name="Lat"  value="<?php echo $Lat?>">
	<input type="hidden"  name="Lng"  value="<?php echo $Lng?>">
	
	<input type="hidden"  name="time1"   value="<?php echo $mondayOpened[0]?>">
	<input type="hidden"  name="time2"   value="<?php echo $mondayOpened[1]?>">
	<input type="hidden"  name="time3"   value="<?php echo $tuesdayOpened[0]?>">
	<input type="hidden"  name="time4"   value="<?php echo $tuesdayOpened[1]?>">
	<input type="hidden"  name="time5"   value="<?php echo $wednesdayOpened[0]?>">
	<input type="hidden"  name="time6"   value="<?php echo $wednesdayOpened[1]?>">
	<input type="hidden"  name="time7"   value="<?php echo $thursdayOpened[0]?>">
	<input type="hidden"  name="time8"   value="<?php echo $thursdayOpened[1]?>">
	<input type="hidden"  name="time9"   value="<?php echo $fridayOpened[0]?>">
	<input type="hidden"  name="time10"  value="<?php echo $fridayOpened[1]?>">
	<input type="hidden"  name="time11"  value="<?php echo $saturdayOpened[0]?>">
	<input type="hidden"  name="time12"  value="<?php echo $saturdayOpened[1]?>">
	<input type="hidden"  name="time13"  value="<?php echo $sundayOpened[0]?>">
	<input type="hidden"  name="time14"  value="<?php echo $sundayOpened[1]?>">
	
	<input type="hidden"  name="description"  value="<?php echo $description?>">

	<input type="submit" value="Submit" >		
</form>


</body>
</html>