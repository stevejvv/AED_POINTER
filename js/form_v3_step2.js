function timeType() {
	if (document.forms.myForm_step2.timesType[0].checked==true) {
	      
		document.getElementById('customContainer').style.display = "block";
		document.getElementById('fullTimeContainer').style.display = "none";
		document.getElementById('variableTimeContainer').style.display = "none";
		
	
	}
	if (document.forms.myForm_step2.timesType[1].checked==true) {
	      
		document.getElementById('customContainer').style.display = "none";
		document.getElementById('fullTimeContainer').style.display = "block";
		document.getElementById('variableTimeContainer').style.display = "none";
	
	}
	if (document.forms.myForm_step2.timesType[2].checked==true) {
	      
		document.getElementById('customContainer').style.display = "none";
		document.getElementById('fullTimeContainer').style.display = "none";
		document.getElementById('variableTimeContainer').style.display = "block";
		
	}
		
}

function daysType() {
	if (document.getElementById("monday").checked==true) {
	    document.getElementById("mondayInputs").style.display = "block";
	    document.getElementById("mondayClosed").style.display = "none";	
	}
	else {
		document.getElementById("mondayInputs").style.display = "none";
	    document.getElementById("mondayClosed").style.display = "block";	
	};
	if (document.getElementById("tuesday").checked==true) {
	    document.getElementById("tuesdayInputs").style.display = "block";
	    document.getElementById("tuesdayClosed").style.display = "none";	
	}
	else {
		document.getElementById("tuesdayInputs").style.display = "none";
	    document.getElementById("tuesdayClosed").style.display = "block";	
	};
	if (document.getElementById("wednesday").checked==true) {
	    document.getElementById("wednesdayInputs").style.display = "block";
	    document.getElementById("wednesdayClosed").style.display = "none";	
	}
	else {
		document.getElementById("wednesdayInputs").style.display = "none";
	    document.getElementById("wednesdayClosed").style.display = "block";	
	};
	if (document.getElementById("thursday").checked==true) {
	    document.getElementById("thursdayInputs").style.display = "block";
	    document.getElementById("thursdayClosed").style.display = "none";	
	}
	else {
		document.getElementById("thursdayInputs").style.display = "none";
	    document.getElementById("thursdayClosed").style.display = "block";	
	};	
	if (document.getElementById("friday").checked==true) {
	    document.getElementById("fridayInputs").style.display = "block";
	    document.getElementById("fridayClosed").style.display = "none";	
	}
	else {
		document.getElementById("fridayInputs").style.display = "none";
	    document.getElementById("fridayClosed").style.display = "block";	
	};	
	if (document.getElementById("saturday").checked==true) {
	    document.getElementById("saturdayInputs").style.display = "block";
	    document.getElementById("saturdayClosed").style.display = "none";	
	}
	else {
		document.getElementById("saturdayInputs").style.display = "none";
	    document.getElementById("saturdayClosed").style.display = "block";	
	};
	if (document.getElementById("sunday").checked==true) {
	    document.getElementById("sundayInputs").style.display = "block";
	    document.getElementById("sundayClosed").style.display = "none";	
	}
	else {
		document.getElementById("sundayInputs").style.display = "none";
	    document.getElementById("sundayClosed").style.display = "block";	
	};
}


function lunchTimeFunc(){
	if(document.forms.myForm_step2.lunchTime[1].checked==true){
		document.getElementById('lunchInputs').style.display = "block";
	}
	else {
		document.getElementById('lunchInputs').style.display = "none";
		
	}
}





