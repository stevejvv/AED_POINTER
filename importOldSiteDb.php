<?php
$con=mysqli_connect("localhost","root","orion","AED_POINTER");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM jos_gmapfp");
  while($row = mysqli_fetch_array($result)){
	  if($row['fullAddress']== NULL){
		  
		  $adresse = $row['adresse'];
		  $codepostal = $row['codepostal'];
		  $ville = $row['ville'];
		  $rows = $row['id'];
	  
		  $fullAddress = $adresse.', '.$ville.' '.$codepostal;
		  mysqli_query($con,"UPDATE jos_gmapfp SET fullAddress='$fullAddress' WHERE id='$rows'");
		  
		  echo $fullAddress.'<br />';
		
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
