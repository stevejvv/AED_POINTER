var inputTextAddress;
var geocoder;
var map;
var myAddress;
var address;
var coords;
	
if(document.getElementById("hiddenType1").value == 3){
	inputTextAddress = document.getElementById("fullAddress").value;
	
	geocoder = new google.maps.Geocoder();
	var mapOptions = {
    zoom: 18,
    mapTypeId: google.maps.MapTypeId.ROADMAP

  };
  map = new google.maps.Map(document.getElementById('map-canvas1'),
      mapOptions);
	
	
	var sAddress = inputTextAddress;
	geocoder.geocode( { 'address': sAddress}, 
		function(results, status) { 
			if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				
				
				marker = new google.maps.Marker(
				{
				    map:map,
				    draggable:true,
				    animation: google.maps.Animation.DROP,
				    position: results[0].geometry.location
				});
				google.maps.event.addListener(marker, 'dragend', function() 
				{
				    geocodePosition(marker.getPosition());
				});

				function geocodePosition(pos) 
				{
				   geocoder = new google.maps.Geocoder();
				   geocoder.geocode
				    ({
				        latLng: pos
				    }, 
				        function(results, status) 
				        {
				            if (status == google.maps.GeocoderStatus.OK) 
				            {
				                var theLat = document.getElementById("theLat1");
								var theLng = document.getElementById("theLng1");
								theLat.innerHTML = "";
								theLng.innerHTML = "";
								theLat.innerHTML = results[0].geometry.location.lat();
								theLng.innerHTML = results[0].geometry.location.lng();
								
								var hiddenLat = document.getElementById("hiddenLat");
								var hiddenLng = document.getElementById("hiddenLng");
								hiddenLat.value = results[0].geometry.location.lat();
								hiddenLng.value = results[0].geometry.location.lng();
				            } 
				        }
				    );
				}
			}
			else{
				alert("Geocode was not successful for the following reason: " + status);
			}	
		});
	
	
}
else {
	inputTextAddress = document.getElementById("fullAddress").value;
	
	geocoder = new google.maps.Geocoder();
	var mapOptions = {
    zoom: 18,
    mapTypeId: google.maps.MapTypeId.ROADMAP

  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
	
	
	var sAddress = inputTextAddress;
	geocoder.geocode( { 'address': sAddress}, 
		function(results, status) { 
			if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				
				
				marker = new google.maps.Marker(
				{
				    map:map,
				    draggable:true,
				    animation: google.maps.Animation.DROP,
				    position: results[0].geometry.location
				});
				google.maps.event.addListener(marker, 'dragend', function() 
				{
				    geocodePosition(marker.getPosition());
				});

				function geocodePosition(pos) 
				{
				   geocoder = new google.maps.Geocoder();
				   geocoder.geocode
				    ({
				        latLng: pos
				    }, 
				        function(results, status) 
				        {
				            if (status == google.maps.GeocoderStatus.OK) 
				            {
				                var theLat = document.getElementById("theLat");
								var theLng = document.getElementById("theLng");
								theLat.innerHTML = "";
								theLng.innerHTML = "";
								theLat.innerHTML = results[0].geometry.location.lat();
								theLng.innerHTML = results[0].geometry.location.lng();
								
								var hiddenLat = document.getElementById("hiddenLat");
								var hiddenLng = document.getElementById("hiddenLng");
								hiddenLat.value = results[0].geometry.location.lat();
								hiddenLng.value = results[0].geometry.location.lng();
				            } 
				        }
				    );
				}
			}
			else{
				alert("Geocode was not successful for the following reason: " + status);
			}	
		});
		
	
	
	
}
		
			
			
			
			

	
	
	
	
	
