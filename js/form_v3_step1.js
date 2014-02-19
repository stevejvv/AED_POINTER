function initialType() {
	if (document.forms.myForm.type1[0].checked==true || document.forms.myForm.type1[1].checked==true || document.forms.myForm.type1[2].checked==true) {
	    document.getElementById('companyContainer').style.display = "block";
		document.getElementById('vehicleContainer').style.display = "none";
		document.getElementById('basicInfoContainer').children[0].style.display = "block";
		document.getElementById('fileContainer').style.display = "block";
		document.getElementById('addressContainer').style.display = "block";
		
			
		if (document.forms.myForm.type1[1].checked==true) {
			document.getElementById('basicInfoContainer').children[0].style.display = "none";
			
		}
	}
	else {
		document.getElementById('companyContainer').style.display = "none ";
	    document.getElementById('vehicleContainer').style.display = "block";
		document.getElementById('fileContainer').style.display = "none";
		document.getElementById('addressContainer').style.display = "none";
		
	}	
	document.getElementById('submitContainer').style.display = "block";		
}


function vehicleType() {
	document.getElementById('basicInfoContainer1').style.display = "block";
	document.getElementById('basicInfoContainer1').children[0].style.display = "block";
	document.getElementById('fileContainer').style.display = "block";
	document.getElementById('addressContainer').style.display = "block";
	
  	if (document.forms.myForm.type2[0].checked==true) {
	      document.getElementById('basicInfoContainer1').children[0].style.display = "none";
	}
}
