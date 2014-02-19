function validateForm(){
	if (document.getElementById("hiddenType1").value == 3) {
		//CONFIDENTIALITÉ VALIDATION
		if(document.forms.myForm_step2.accessibility[0].checked==false && document.forms.myForm_step2.accessibility[1].checked==false ){
	    	alert('Veuillez specifier si le DEA peut etre publier su AED-Pointer');
		    return false;
		}
		
	
		
	}
	else {
		// DISPONIBILITÉ VALIDATION
		if(document.forms.myForm_step2.timesType[1].checked==true ){ //PRECISER LES HEURES
	    	if(document.forms.myForm_step2.monday.checked==false && document.forms.myForm_step2.tuesday.checked==false && document.forms.myForm_step2.wednesday.checked==false && document.forms.myForm_step2.thursday.checked==false && document.forms.myForm_step2.friday.checked==false && document.forms.myForm_step2.saturday.checked==false && document.forms.myForm_step2.sunday.checked==false ){
		    	alert('Veuillez séléctionner les jours ou le DEA est disponible');
			    return false;
	    	}
			if(document.forms.myForm_step2.monday.checked==true ){
		    	var myselect=document.forms.myForm_step2.time1;
				if (myselect.options[0].selected==true){
			    	alert('Pas d\'heure séléctionner pour lundi');
				    return false;	
		    	}
	    	}
	    	if(document.forms.myForm_step2.tuesday.checked==true ){
		    	var myselect=document.forms.myForm_step2.time3;
				if (myselect.options[0].selected==true){
			    	alert('Pas d\'heure séléctionner pour mardi');
				    return false;	
		    	}
	    	}
	    	if(document.forms.myForm_step2.wednesday.checked==true ){
		    	var myselect=document.forms.myForm_step2.time5;
				if (myselect.options[0].selected==true){
			    	alert('Pas d\'heure séléctionner pour mercredi');
				    return false;	
		    	}
	    	}
	    	if(document.forms.myForm_step2.thursday.checked==true ){
		    	var myselect=document.forms.myForm_step2.time7;
				if (myselect.options[0].selected==true){
			    	alert('Pas d\'heure séléctionner pour jeudi');
				    return false;	
		    	}
	    	}
	    	if(document.forms.myForm_step2.friday.checked==true ){
		    	var myselect=document.forms.myForm_step2.time9;
				if (myselect.options[0].selected==true){
			    	alert('Pas d\'heure séléctionner pour vendredi');
				    return false;	
		    	}
	    	}
	    	if(document.forms.myForm_step2.saturday.checked==true ){
		    	var myselect=document.forms.myForm_step2.time11;
				if (myselect.options[0].selected==true){
			    	alert('Pas d\'heure séléctionner pour samedi');
				    return false;	
		    	}
	    	}
	    	if(document.forms.myForm_step2.sunday.checked==true ){
		    	var myselect=document.forms.myForm_step2.time13;
				if (myselect.options[0].selected==true){
			    	alert('Pas d\'heure séléctionner pour dimanche');
				    return false;	
		    	}
	    	}	
	    }
		else if(document.forms.myForm_step2.timesType[2].checked==true ){ // DISPO VARIABLE
	    	if (document.forms.myForm_step2.variableTime.value=="" ){
		    	alert('Veuillez specifier la disponibilité variable du DEA');
			    return false;	
	    	}
	    }
		//REPAS VALIDATION
		if(document.forms.myForm_step2.lunchTime[0].checked==false && document.forms.myForm_step2.lunchTime[1].checked==false ){
	    	alert('Veuillez specifier si le DEA est disponible pendant les heures de repas');
		    return false;
		}
		if(document.forms.myForm_step2.lunchTime[1].checked==true ){
	    	var myselect=document.forms.myForm_step2.lunchTimeClose;
	    	var myselect2=document.forms.myForm_step2.lunchTimeOpen;
			
			if (myselect.options[0].selected==true){
		    	alert('Veuillez spécifier l\'heure d\'indisponibilité du DEA au temps de midi');
			    return false;	
	    	}
			if (myselect2.options[0].selected==true){
		    	alert('Veuillez spécifier l\'heure d\'indisponibilité du DEA au temps de midi');
			    return false;	
	    	}
		}
		//FERIÉ VALIDATION
		if(document.forms.myForm_step2.bankHolidays[0].checked==false && document.forms.myForm_step2.bankHolidays[1].checked==false ){
	    	alert('Veuillez specifier si le DEA est disponible pendant jours feriés');
		    return false;
		}
		//SCHOOL VALIDATION
		if(document.forms.myForm_step2.schoolHolidays[0].checked==false && document.forms.myForm_step2.schoolHolidays[1].checked==false ){
	    	alert('Veuillez specifier si le DEA est disponible pendant les vacances scolaires');
		    return false;
		}
		//LOCALISATION VALIDATION
		if(document.getElementById("description").value ==""){
	    	alert('Veuillez specifier la localisation du DEA');
		    return false;
		}
		//ACCESSIBILITÉ VALIDATION
		if(document.forms.myForm_step2.accessibleAuPublic[0].checked==false && document.forms.myForm_step2.accessibleAuPublic[1].checked==false ){
	    	alert('Veuillez specifier l\'accessibilité du DEA');
		    return false;
		}
		if(document.forms.myForm_step2.accessibleAuPublic[1].checked==true ){
			if(document.getElementById("auPublicNonDescription").value ==""){
		    	alert('Veuillez specifier l\'accessibilité du DEA');
			    return false;
			}
		}
		//CONFIDENTIALITÉ VALIDATION
		if(document.forms.myForm_step2.accessibility[0].checked==false && document.forms.myForm_step2.accessibility[1].checked==false ){
	    	alert('Veuillez specifier si le DEA peut etre publier su AED-Pointer');
		    return false;
		}
	}
}


