<?php 
//custom Times
if ($timesType == 1) {
	if ($monday == "on"){
		$monday_echo = '	
		<tr>
			<td class="bold">Lundi</td>
			<td>'.$time1.'</td>
			<td>'.$time2.'</td>
		</tr>';	
	}
	else {
		$monday_echo = '	
			<tr>
				<td class="bold">Lundi</td>
				<td colspan ="2">Fermé</td>
			</tr>';
	}
	if ($tuesday == "on"){
	$tuesday_echo = '	
		<tr>
			<td class="bold">Mardi</td>
			<td>'.$time3.'</td>
			<td>'.$time4.'</td>
		</tr>';	
	}
	else {
	$tuesday_echo =  '	
			<tr>
				<td class="bold">Mardi</td>
				<td colspan ="2">Fermé</td>
			</tr>';
	}
	if ($wednesday == "on"){
	$wednesday_echo =  '	
		<tr>
			<td class="bold">Mercredi</td>
			<td>'.$time5.'</td>
			<td>'.$time6.'</td>
		</tr>'	;
	}
	else {
		$wednesday_echo =  '	
		<tr>
			<td class="bold">Mercredi</td>
			<td colspan ="2">Fermé</td>
		</tr>';
	}
	if ($thursday == "on"){
	$thursday_echo =  '	
		<tr>
			<td class="bold">Jeudi</td>
			<td>'.$time7.'</td>
			<td>'.$time8.'</td>
		</tr>';	
	}
	else {
		$thursday_echo =  '	
		<tr>
			<td class="bold">Jeudi</td>
			<td colspan ="2">Fermé</td>
		</tr>';
	}
	if ($friday == "on"){
	$friday_echo =  '	
		<tr>
			<td class="bold">Vendredi</td>
			<td>'.$time9.'</td>
			<td>'.$time10.'</td>
		</tr>';	
	}
	else {
		$friday_echo =  '	
		<tr>
			<td class="bold">Vendredi</td>
			<td colspan ="2">Fermé</td>
		</tr>';
	}
	if ($saturday == "on"){
	$saturday_echo =  '	
		<tr>
			<td class="bold">Samedi</td>
			<td>'.$time11.'</td>
			<td>'.$time12.'</td>
		</tr>';	
	}
	else {
		$saturday_echo =  '	
		<tr>
			<td class="bold">Samedi</td>
			<td colspan ="2">Fermé</td>
		</tr>';
	}
	if ($sunday == "on"){
	$sunday_echo =  '	
		<tr>
			<td class="bold">Dimanche</td>
			<td>'.$time13.'</td>
			<td>'.$time14.'</td>
		</tr>';	
	}
	else {
		$sunday_echo =  '	
		<tr>
			<td class="bold">Dimanche</td>
			<td colspan ="2">Fermé</td>
		</tr>';
	}

	$times_output = 
		'<table border="0">
			<tr>
				<th> </th>
				<th >Heure d\'ouverture</th>
				<th >Heure de fermeture</th>
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
			</table><br /><br />';		
}
//24/7
else if($timesType == 0){
	$times_output = '<span style="color:red; line-height:2em; "> Le DEA est disponible tout le temps</span><br /><br />';	
}
else {
	$times_output = '<div class="step_3_items"><span> Disponibilité variable: </span>'.$variableTime.'</div>';
}



?>