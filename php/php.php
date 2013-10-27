<?php 
$name         = $_POST['name'];
$company      = $_POST['company'];
$phone        = $_POST['phone'];
$email        = $_POST['email'];
$address      = $_POST['address'];

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

$streetNumber = $_POST['streetNumber'];
$route        = $_POST['route'];
$town         = $_POST['town'];
$postalCode   = $_POST['postalCode'];
$country      = $_POST['country'];
$Lat          = $_POST['Lat'];
$Lng          = $_POST['Lng'];


$availabilities;

if ($times == 2) {
	$availabilities = 'Opened all the time';
}
if ($times = 1) {
	if ($monday = 'on') {
		$mondayOpened[0] = $time1;
		$mondayOpened[1] = $time2;
	} else {
		$mondayOpened[0] = "Closed";
		$mondayOpened[1] = "Closed";
	}
	if ($tuesday = 'on') {
		$tuesdayOpened[0] = $time3;
		$tuesdayOpened[1] = $time4;
	}
	else {
		$tuesdayOpened[0] = "Closed";
		$tuesdayOpened[1] = "Closed";
	}
	if ($wednesday = 'on') {
		$wednesdayOpened[0] = $time5;
		$wednesdayOpened[1] = $time6;
	}
	else {
		$wednesdayOpened[0] = "Closed";
		$wednesdayOpened[1] = "Closed";
	}
	if ($thursday = 'on') {
		$thursdayOpened[0] = $time7;
		$thursdayOpened[1] = $time8;
	}
	else {
		$thursdayOpened[0] = "Closed";
		$thursdayOpened[1] = "Closed";
	}
	if ($friday = 'on') {
		$fridayOpened[0] = $time9;
		$fridayOpened[1] = $time10;
	}
	else {
		$fridayOpened[0] = "Closed";
		$fridayOpened[1] = "Closed";
	}
	if ($saturday = 'on') {
		$saturdayOpened[0] = $time11;
		$saturdayOpened[1] = $time12;
	}
	else {
		$saturdayOpened[0] = "Closed";
		$saturdayOpened[1] = "Closed";
	}
	if ($sunday = 'on') {
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
			<td>MONDAY</td>
			<td>'echo $mondayOpened[0]'</td>
			<td>'echo $mondayOpened[1]'</td>
		</tr>
		<tr>
			<td>TUESDAY</td>
			<td>'echo $tuesdayOpened[0]'</td>
			<td>'echo $tuesdayOpened[1]'</td>
		</tr>
		<tr>
			<td>WEDNESDAY</td>
			<td>'echo $wednesdayOpened[0]'</td>
			<td>'echo $wednesdayOpened[1]'</td>
		</tr>
		<tr>
			<td>THURSDAY</td>
			<td>'echo $thursdayOpened[0]'</td>
			<td>'echo $thursdayOpened[1]'</td>
		</tr>
		<tr>
			<td>FRIDAY</td>
			<td>'echo $fridayOpened[0]'</td>
			<td>'echo $fridayOpened[1]'</td>
		</tr>
		<tr>
			<td>SATURDAY</td>
			<td>'echo $saturdayOpened[0]'</td>
			<td>'echo $saturdayOpened[1]'</td>
		</tr>
		<tr>
			<td>SUNDAY</td>
			<td>'echo $sundayOpened[0]'</td>
			<td>'echo $sundayOpened[1]'</td>
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



</body>
</html>