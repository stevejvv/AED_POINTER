
var validatedName=new Array("Name","Company name","Telephone number","Email address");
var validated=new Array(0,0,0,0);
var validatedResults =new Array ();

function validateForm(){
	document.getElementById("error").innerHTML = "";
	
	
	//NAME VALIDATION
	var x=document.getElementById('name').value;
	if (x==null || x==""){
		validated[0] = 1;
		document.getElementById('name').style.backgroundColor="#e8b8b5";
	} 
	else {
	validated[0] = 0;	
	}
	//COMPANY VALIDATION
	var x=document.getElementById('company').value;
	if (x==null || x==""){
		validated[1] = 1;
		document.getElementById('company').style.backgroundColor="#e8b8b5";
	}
	else {
	validated[1] = 0;	
	}
	//PHONE VALIDATION
	var x=document.getElementById('phone').value;
	if (x==null || x==""){
		validated[2] = 1;
		document.getElementById('phone').style.backgroundColor="#e8b8b5";
	} 
	else {
	validated[2] = 0;	
	}
	
	//EMAIL VALIDATION
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
	
	
	
	
	
	
	
	for (var i=0;i<4;i++){
		if (validated[i] == 1) {
			document.getElementById("error").innerHTML += "Please fill in the " + validatedName[i] + " field<br />"; 
		}
		
	}
	for (var i=0;i<4;i++){
		if (validated[i] == 1) {
			return false;
			
		}
		
	}
}


function colorBgFunc(x)
{
x.style.background="#efeeea";
}


