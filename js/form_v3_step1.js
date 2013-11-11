function initialType() {
	if (document.forms.myForm.type1[0].checked==true) {
	      document.getElementById('privateContainer').style.display = "none";
	      document.getElementById('publicContainer').style.display = "none";
	      document.getElementById('vehicleContainer').style.display = "none";

	      document.getElementById('companyContainer').style.display = "block";
	      document.getElementById('submitContainer').style.display = "block";
		  
		document.getElementById('titles').children[0].style.display = "none";
		document.getElementById('titles').children[1].style.display = "block";
		document.getElementById('titles').children[2].style.display = "none"; 
		document.getElementById('titles').children[3].style.display = "none"; 
		document.getElementById('titles').children[4].style.display = "none"; 
		document.getElementById('titles').children[5].style.display = "none"; 
		document.getElementById('titles').children[6].style.display = "none"; 
		document.getElementById('titles').children[7].style.display = "none"; 
		document.getElementById('titles').children[8].style.display = "none"; 
		 
	    
		  
	
	}
	if (document.forms.myForm.type1[1].checked==true) {
      	  document.getElementById('companyContainer').style.display = "none";
	      document.getElementById('publicContainer').style.display = "none";
	      document.getElementById('vehicleContainer').style.display = "none";

	      document.getElementById('privateContainer').style.display = "block";
	      document.getElementById('submitContainer').style.display = "block";
	
		document.getElementById('titles').children[0].style.display = "none";
		document.getElementById('titles').children[1].style.display = "none";
		document.getElementById('titles').children[2].style.display = "block"; 
		document.getElementById('titles').children[3].style.display = "none"; 
		document.getElementById('titles').children[4].style.display = "none"; 
		document.getElementById('titles').children[5].style.display = "none"; 
		document.getElementById('titles').children[6].style.display = "none"; 
		document.getElementById('titles').children[7].style.display = "none"; 
		document.getElementById('titles').children[8].style.display = "none";
	}
	if (document.forms.myForm.type1[2].checked==true) {
      	  document.getElementById('privateContainer').style.display = "none";
	      document.getElementById('companyContainer').style.display = "none";
	      document.getElementById('vehicleContainer').style.display = "none";

	      document.getElementById('publicContainer').style.display = "block";
	      document.getElementById('submitContainer').style.display = "block";
	
		document.getElementById('titles').children[0].style.display = "none";
		document.getElementById('titles').children[1].style.display = "none";
		document.getElementById('titles').children[2].style.display = "none"; 
		document.getElementById('titles').children[3].style.display = "block"; 
		document.getElementById('titles').children[4].style.display = "none"; 
		document.getElementById('titles').children[5].style.display = "none"; 
		document.getElementById('titles').children[6].style.display = "none"; 
		document.getElementById('titles').children[7].style.display = "none"; 
		document.getElementById('titles').children[8].style.display = "none";
	}
	if (document.forms.myForm.type1[3].checked==true) {
      	  document.getElementById('privateContainer').style.display = "none";
	      document.getElementById('publicContainer').style.display = "none";
	      document.getElementById('companyContainer').style.display = "none";

	      document.getElementById('vehicleContainer').style.display = "block";
	      document.getElementById('submitContainer').style.display = "block";
	
		document.getElementById('titles').children[0].style.display = "none";
		document.getElementById('titles').children[1].style.display = "none";
		document.getElementById('titles').children[2].style.display = "none"; 
		document.getElementById('titles').children[3].style.display = "none"; 
		document.getElementById('titles').children[4].style.display = "block"; 
		document.getElementById('titles').children[5].style.display = "none"; 
		document.getElementById('titles').children[6].style.display = "none"; 
		document.getElementById('titles').children[7].style.display = "none"; 
		document.getElementById('titles').children[8].style.display = "none";
	}			
}



function vehicleType() {
  if (document.forms.myForm.type2[0].checked==true) {
      document.getElementById('basicInfoContainer1').style.display = "none";
      document.getElementById('basicInfoContainer2').style.display = "none";
      document.getElementById('basicInfoContainer3').style.display = "none";

      document.getElementById('basicInfoContainer0').style.display = "block";

		document.getElementById('titles').children[0].style.display = "none";
		document.getElementById('titles').children[1].style.display = "none";
		document.getElementById('titles').children[2].style.display = "none"; 
		document.getElementById('titles').children[3].style.display = "none"; 
		document.getElementById('titles').children[4].style.display = "none"; 
		document.getElementById('titles').children[5].style.display = "block"; 
		document.getElementById('titles').children[6].style.display = "none"; 
		document.getElementById('titles').children[7].style.display = "none"; 
		document.getElementById('titles').children[8].style.display = "none";
	}
	
  if (document.forms.myForm.type2[1].checked==true) {
	  document.getElementById('basicInfoContainer0').style.display = "none";
      document.getElementById('basicInfoContainer2').style.display = "none";
      document.getElementById('basicInfoContainer3').style.display = "none";

      document.getElementById('basicInfoContainer1').style.display = "block";

		document.getElementById('titles').children[0].style.display = "none";
		document.getElementById('titles').children[1].style.display = "none";
		document.getElementById('titles').children[2].style.display = "none"; 
		document.getElementById('titles').children[3].style.display = "none"; 
		document.getElementById('titles').children[4].style.display = "none"; 
		document.getElementById('titles').children[5].style.display = "none"; 
		document.getElementById('titles').children[6].style.display = "block"; 
		document.getElementById('titles').children[7].style.display = "none"; 
		document.getElementById('titles').children[8].style.display = "none";	
 }

  if (document.forms.myForm.type2[2].checked==true) {
	  document.getElementById('basicInfoContainer1').style.display = "none";
      document.getElementById('basicInfoContainer0').style.display = "none";
      document.getElementById('basicInfoContainer3').style.display = "none";

      document.getElementById('basicInfoContainer2').style.display = "block";

		document.getElementById('titles').children[0].style.display = "none";
		document.getElementById('titles').children[1].style.display = "none";
		document.getElementById('titles').children[2].style.display = "none"; 
		document.getElementById('titles').children[3].style.display = "none"; 
		document.getElementById('titles').children[4].style.display = "none"; 
		document.getElementById('titles').children[5].style.display = "none"; 
		document.getElementById('titles').children[6].style.display = "none"; 
		document.getElementById('titles').children[7].style.display = "block"; 
		document.getElementById('titles').children[8].style.display = "none";
  }

  if (document.forms.myForm.type2[3].checked==true) {
	  document.getElementById('basicInfoContainer1').style.display = "none";
      document.getElementById('basicInfoContainer2').style.display = "none";
      document.getElementById('basicInfoContainer0').style.display = "none";

      document.getElementById('basicInfoContainer3').style.display = "block";

		document.getElementById('titles').children[0].style.display = "none";
		document.getElementById('titles').children[1].style.display = "none";
		document.getElementById('titles').children[2].style.display = "none"; 
		document.getElementById('titles').children[3].style.display = "none"; 
		document.getElementById('titles').children[4].style.display = "none"; 
		document.getElementById('titles').children[5].style.display = "none"; 
		document.getElementById('titles').children[6].style.display = "none"; 
		document.getElementById('titles').children[7].style.display = "none"; 
		document.getElementById('titles').children[8].style.display = "block";
	  }
}
