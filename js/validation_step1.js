function validateForm(){
	if (document.forms.myForm.type1[0].checked==true || document.forms.myForm.type1[1].checked==true || document.forms.myForm.type1[2].checked==true) {
		// NAME VALIDATION
	    
		if(document.forms.myForm.name0.value==''){
	    	alert('Veuillez indiquer le nom de la personne de contact');
		    return false;
	    }
		// EMAIL VALIDATION
	
		var x=document.forms.myForm.email0.value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		  	alert('Veuillez indiquer une adresse email valide');
		    return false;
			
			//document.getElementById('email').style.backgroundColor="#e8b8b5";
		}
		// ADDRESS VALIDATION
		
			//IF NOT VALIDATED
		if(!document.getElementById('latitudeCheck')){
	    	alert('Assurez-vous d\'entrer une adresse correcte et d\'avoir calculé les coordonnées GPS');
		    return false;
	    }
			//IF NOT IN COUNTRIES
		if(document.getElementById('countryCheck').value == 'Belgique'|| document.getElementById('countryCheck').value == 'Belgium'|| document.getElementById('countryCheck').value == 'België'||document.getElementById('countryCheck').value == 'Belgien'||document.getElementById('countryCheck').value == 'Allemagne'||document.getElementById('countryCheck').value == 'Duitsland'|| document.getElementById('countryCheck').value == 'Germany'|| document.getElementById('countryCheck').value == 'Deutschland'|| document.getElementById('countryCheck').value == 'Hollande'|| document.getElementById('countryCheck').value == 'Holland'){
	    	
	    }
		else {
	    	alert('Ce service est seulement disponible en Belgique, Hollande et en Allemagne');
		    return false;
		}
		//if(document.getElementById('streetNumCheck').value == 'undefined'){
	    //	alert('Please make sure to enter a street number!');
		//    return false;
	    //}
	}
	else {
		// NAME VALIDATION
	    
		if(document.forms.myForm.name1.value==''){
	    	alert('Veuillez indiquer le nom de la personne de contact');
		    return false;
	    }
		// EMAIL VALIDATION
	
		var x=document.forms.myForm.email1.value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		  	alert('Veuillez indiquer une adresse email valide');
		    return false;
			
			//document.getElementById('email').style.backgroundColor="#e8b8b5";
		}
		// ADDRESS VALIDATION
		
			//IF NOT VALIDATED
		if(!document.getElementById('latitudeCheck')){
	    	alert('Assurez-vous d\'entrer une adresse correcte et d\'avoir calculé les coordonnées GPS');
		    return false;
	    }
			//IF NOT IN COUNTRIES
		if(document.getElementById('countryCheck').value == 'Belgique'|| document.getElementById('countryCheck').value == 'Belgium'|| document.getElementById('countryCheck').value == 'België'||document.getElementById('countryCheck').value == 'Belgien'||document.getElementById('countryCheck').value == 'Allemagne'||document.getElementById('countryCheck').value == 'Duitsland'|| document.getElementById('countryCheck').value == 'Germany'|| document.getElementById('countryCheck').value == 'Deutschland'|| document.getElementById('countryCheck').value == 'Hollande'|| document.getElementById('countryCheck').value == 'Holland'){
	    	
	    }
		else {
	    	alert('Ce service est seulement disponible en Belgique, Hollande et en Allemagne');
		    return false;
		}
		//if(document.getElementById('streetNumCheck').value == 'undefined'){
	    //	alert('Please make sure to enter a street number!');
		//    return false;
	    //}
	
	}
}


