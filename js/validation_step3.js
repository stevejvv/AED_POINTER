function validateForm(){
	
	    if (document.getElementById("hiddenName").value == "" || document.getElementById("hiddenEmail").value == "" || document.getElementById("fullAddress").value == "" || document.getElementById("hiddenLat").value == "" || document.getElementById("hiddenLng").value == "") {
	    	alert('Veuillez retourner a l\'étape 1 du formulaire');
		    return false;
		}
}
