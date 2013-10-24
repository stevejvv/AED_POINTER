var inputTextAddress = "133, grande rue, nancy, france"
var geocoder;
var map;
var myAddress;
var address;
var coords;
	
	function getMarkerAddress(location) {
		geocoder = new google.maps.Geocoder();
		var mapOptions = {
	    zoom: 5,
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
				coords = results[0].geometry.location
	            address = results[0].formatted_address;
				document.getElementById("addressResult").innerHTML = address + coords;
	          }
	        }
	       else {
	        alert("Geocoder failed due to: " + status);
	      }
	    });
	}	

	
	
	
