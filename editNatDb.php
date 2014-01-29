<?php
$con=mysqli_connect("localhost","root","orion","AED_POINTER");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $theId = 0;
  $result = mysqli_query($con,"SELECT * FROM tempNatDb");
  while($row = mysqli_fetch_array($result)){
	  
	  $adresse = $row['adresse'];
	  $rows = $row['id'];
	  $description;
	  $modAdresse;
	  $find = '(';
	  $find2 = ')';
	  $position = strpos($adresse, $find); 
	  if ($position !== false) {
		  $theArray = explode("(", $adresse);
		  $modAdresse = $theArray[0];
		  $description = $theArray[1];
		  
		  $position2 = strpos($description, $find2); 
		  if ($position2 !== false) {
		  	$description = str_replace($find2,'',$description); 
		  }
		  
		  mysqli_query($con,"UPDATE tempNatDb SET adresse='$modAdresse' WHERE id='$rows'");
		  
		  
		  
		  echo $theId." ".$row['id']." ".$modAdresse." > ".$description;
		  echo "<br>";
		  $theId++;
		  
	  }
  }

mysqli_close($con);








	
	
	

//$sql = "INSERT INTO tempDb (name, company,phone,email,address,country,Lat,Lng,time1,time2,time3,time4,time5,time6,time7,time8,time9,time10,time11,time12,time13,time14,description) VALUES ('$name','$company','$phone','$email','$address','$country','$Lat','$Lng','$time1','$time2','$time3','$time4','$time5','$time6','$time7','$time8','$time9','$time10','$time11','$time12','$time13','$time14','$description')";	
?>

<!doctype html>
<html>

<head>
	
	
</head>
<body>


</body>
<html>
