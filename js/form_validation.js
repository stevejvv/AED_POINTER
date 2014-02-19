
var validatedName=new Array("Name","Company name","Telephone number","Email address", "Address", "Time", "Description");
var validated=new Array(0,0,0,0,0,0,0);
var validatedResults =new Array ();

function validateForm(){
	document.getElementById("error").innerHTML = "";
	
	
	// 0 NAME VALIDATION
	var x=document.getElementById('name').value;
	if (x==null || x==""){
		validated[0] = 1;
		document.getElementById('name').style.backgroundColor="#e8b8b5";
	} 
	else {
	validated[0] = 0;	
	}
	
	// 1 COMPANY VALIDATION
	
	var x=document.getElementById('company').value;
	if (x==null || x==""){
		validated[1] = 1;
		document.getElementById('company').style.backgroundColor="#e8b8b5";
	}
	else {
	validated[1] = 0;	
	}
	
	// 2 PHONE VALIDATION
	
	var x=document.getElementById('phone').value;
	if (x==null || x==""){
		validated[2] = 1;
		document.getElementById('phone').style.backgroundColor="#e8b8b5";
	} 
	else {
	validated[2] = 0;	
	}
	
	// 3 EMAIL VALIDATION
	
	var x=document.getElementById('email').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
	  	validated[3] = 1;
		document.getElementById('email').style.backgroundColor="#e8b8b5";
	}
	else {
	validated[3] = 0;	
	}
	
	// 4 ADDRESS VALIDATION
	
	var x=document.getElementById('address').value;
	if (x==null || x==""){
		validated[4] = 1;
		document.getElementById('address').style.backgroundColor="#e8b8b5";
	} 
	else {
	validated[4] = 0;	
	}
	
	
	// 5 TIME VALIDATION
	
	//if (document.getElementById("times1").checked){
		
	//} else if (document.getElementById("times2").checked){
		
	//} else {
	//	validated[5] = 1;	
	//}
	
	
	// 6 DESCRIPTION VALIDATION
	
	var x=document.getElementById('description').value;
	if (x==null || x==""){
		validated[6] = 1;
		document.getElementById('description').style.backgroundColor="#e8b8b5";
	} 
	else {
	validated[6] = 0;	
	}
	
	
	//ECHO VALIDATION
	
	for (var i=0;i<7;i++){
		if (validated[i] == 1) {
			document.getElementById("error").innerHTML += "Please fill in the " + validatedName[i] + " field<br />"; 
		}	
	}
	for (var i=0;i<7;i++){
		if (validated[i] == 1) {
			return false;		
		}	
	}
}


function colorBgFunc(x)
{
x.style.background="#efeeea";
}


