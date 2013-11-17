<?php 
//custom Times
if ($timesType == 0) {
	if ($monday == "on"){
		$monday_echo = '	
		<tr>
			<td class="bold">Monday</td>
			<td>'.$time1.'</td>
			<td>'.$time2.'</td>
		</tr>';	
	}
	else {
		$monday_echo = '	
			<tr>
				<td class="bold">Monday</td>
				<td colspan ="2">Closed</td>
			</tr>';
	}
	if ($tuesday == "on"){
	$tuesday_echo = '	
		<tr>
			<td class="bold">Tuesday</td>
			<td>'.$time3.'</td>
			<td>'.$time4.'</td>
		</tr>';	
	}
	else {
	$tuesday_echo =  '	
			<tr>
				<td class="bold">Tuesday</td>
				<td colspan ="2">Closed</td>
			</tr>';
	}
	if ($wednesday == "on"){
	$wednesday_echo =  '	
		<tr>
			<td class="bold">Wednesday</td>
			<td>'.$time5.'</td>
			<td>'.$time6.'</td>
		</tr>'	;
	}
	else {
		$wednesday_echo =  '	
		<tr>
			<td class="bold">Wednesday</td>
			<td colspan ="2">Closed</td>
		</tr>';
	}
	if ($thursday == "on"){
	$thursday_echo =  '	
		<tr>
			<td class="bold">Thursday</td>
			<td>'.$time7.'</td>
			<td>'.$time8.'</td>
		</tr>';	
	}
	else {
		$thursday_echo =  '	
		<tr>
			<td class="bold">Thursday</td>
			<td colspan ="2">Closed</td>
		</tr>';
	}
	if ($friday == "on"){
	$friday_echo =  '	
		<tr>
			<td class="bold">Friday</td>
			<td>'.$time9.'</td>
			<td>'.$time10.'</td>
		</tr>';	
	}
	else {
		$friday_echo =  '	
		<tr>
			<td class="bold">Friday</td>
			<td colspan ="2">Closed</td>
		</tr>';
	}
	if ($saturday == "on"){
	$saturday_echo =  '	
		<tr>
			<td class="bold">Saturday</td>
			<td>'.$time11.'</td>
			<td>'.$time12.'</td>
		</tr>';	
	}
	else {
		$saturday_echo =  '	
		<tr>
			<td class="bold">Saturday</td>
			<td colspan ="2">Closed</td>
		</tr>';
	}
	if ($sunday == "on"){
	$sunday_echo =  '	
		<tr>
			<td class="bold">Sunday</td>
			<td>'.$time13.'</td>
			<td>'.$time14.'</td>
		</tr>';	
	}
	else {
		$sunday_echo =  '	
		<tr>
			<td class="bold">Sunday</td>
			<td colspan ="2">Closed</td>
		</tr>';
	}

	$times_output = 
		'<table border="0">
			<tr>
				<th> </th>
				<th >Opening hours</th>
				<th >Closing hours</th>
			</tr>
			'
			.$monday_echo.
			$tuesday_echo.
			$wednesday_echo.
			$thursday_echo.
			$friday_echo.
			$saturday_echo.
			$sunday_echo.
			'
			</table>';		
}
//24/7
else {
	$times_output = 'The AED is available all the time';	
}



?>