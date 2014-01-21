<?php

	if (!$link = mysql_connect("localhost","root","orion")) {
	    echo 'Could not connect to mysql';
	    exit;
	}

	if (!mysql_select_db('AED_POINTER', $link)) {
	    echo 'Could not select database';
	    exit;
	}

	$sql    = 'SELECT* FROM tempDb';
	$result = mysql_query($sql, $link);

	if (!$result) {
	    echo "DB Error, could not query the database\n";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}

	while ($row = mysql_fetch_assoc($result)) {
	    echo '
			<div class="ticketContainer" onclick="loadXMLDoc('. $row['id'] .')">
				<div class="ticketId">'. $row['id'] .'</div>
				<div class="ticketName">'. $row['name'] .'</div>
				<div class="ticketCompany">'. $row['company'].'</div>
			</div>
		';
	}

	mysql_free_result($result);	
?>
