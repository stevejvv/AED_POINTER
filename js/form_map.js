var inputTextAddress;
var geocoder;
var map;
var myAddress;
var address;
var coords;
	
	function getMarkerAddress(location) {
		document.getElementById("map_container").style.display ="block";
		inputTextAddress = document.getElementById("address").value;
		
		geocoder = new google.maps.Geocoder();
		var mapOptions = {
	    zoom: 15,
	    disableDefaultUI: true,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	
	  };
	  map = new google.maps.Map(document.getElementById('map-canvas'),
	      mapOptions);
		
		
		var sAddress = inputTextAddress;
		geocoder.geocode( { 'address': sAddress}, 
			function(results, status) { 
				if (status == google.maps.GeocoderStatus.OK) {
					map.setCenter(results[0].geometry.location);
					var marker = new google.maps.Marker({
					 map: map,
					 position: results[0].geometry.location,
					});
				}
				else{
					alert("Geocode was not successful for the following reason: " + status);
				}	
			});
			
		geocoder.geocode( { 'address': sAddress}, function(results, status) {
	      if (status == google.maps.GeocoderStatus.OK) {
	          if(results[0])
	          {
				coordsLat = results[0].geometry.location.lat();
				coordsLng = results[0].geometry.location.lng();
				
	            address = results[0].formatted_address;
				
				document.getElementById("addressResult").innerHTML = "RETURNED ADDRESS <br /><br />" + address +"<br /><br />Latitude: "+ coordsLat + "<br />Longitude: "+ coordsLng;
				
			
				var country;
				
				for (i=0;i<results[0].address_components.length;i++){
				    for (j=0;j<results[0].address_components[i].types.length;j++){
				       if(results[0].address_components[i].types[j]=="country")
				          country = results[0].address_components[i].long_name
				    }
				}
				document.getElementById("hiddenOutput").innerHTML = "";
				
				document.getElementById("hiddenOutput").innerHTML += "<input type=\"hidden\"  name=\"fullAddress\"  value=\""+address+"\">";
				document.getElementById("hiddenOutput").innerHTML += "<input type=\"hidden\"  name=\"country\"  value=\""+country+"\">";
				document.getElementById("hiddenOutput").innerHTML += "<input type=\"hidden\"  id=\"latitudeCheck\" name=\"Lat\"  value=\""+coordsLat+"\">";
				document.getElementById("hiddenOutput").innerHTML += "<input type=\"hidden\"  name=\"Lng\"  value=\""+coordsLng+"\">";
			
				
			
				}
	        }
	       else {
	        alert("Geocoder failed due to: " + status);
	      }
	    });
	}	

	
	
	
