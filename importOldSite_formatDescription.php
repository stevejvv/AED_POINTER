<?php
$con=mysqli_connect("localhost","root","orion","AED_POINTER");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM jos_gmapfp1");
  while($row = mysqli_fetch_array($result)){
	  
	  
	   $find = '#';
	   $find2 = 'DISPONIBILITÉ:';
	  if(strpos($row['intro'], $find)== !NULL){
		  
		  $intro = $row['intro'];
		  $rows = $row['id'];
		  
			  $theArray = explode($find, $intro);
			  $descr = $theArray[0];
			  $dispo = $theArray[1];
			  $theArray2 = explode($find2, $dispo);
			  $dispo2 = $theArray2[0];
			  
		  		mysqli_query($con,"UPDATE jos_gmapfp1 SET disponibilite='$dispo2' WHERE id='$rows'");
			    mysqli_query($con,"UPDATE jos_gmapfp1 SET description='$descr' WHERE id='$rows'");
		  	  
			  
			  
			  
			  
			  echo $row['id']." > dispo : ".$dispo;
			  echo "<br />";	  
		  
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
