function fType() {
  if (document.forms.myForm.type1[0].checked==true) {
      document.getElementById('basicInfoContainer').innerHTML = '<h1>GENERAL INFORMATION (Company)</h1><div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Company name<span>* </span><input style="float:right;" type="text" name="company" id="company"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name" id="name"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone" id="phone"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email" id="email"></div><br>';
}
  if (document.forms.myForm.type1[1].checked==true) {
      document.getElementById('basicInfoContainer').innerHTML = '<h1>GENERAL INFORMATION (Public Place)</h1><div style="width:60%;" class="hint--right" data-hint="Please enter the name of the organisation">Organisation name<span>* </span><input style="float:right;" type="text" name="company" id="company"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name" id="name"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone" id="phone"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email" id="email"></div><br>';
 };
  if (document.forms.myForm.type1[2].checked==true) {
      document.getElementById('basicInfoContainer').innerHTML = '<h1>GENERAL INFORMATION (Independent)</h1><div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name" id="name"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone" id="phone"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email" id="email"></div><br>';
  }
  if (document.forms.myForm.type1[3].checked==true) {
	  document.getElementById('basicInfoContainer').innerHTML = '<h1>GENERAL INFORMATION (Vehicle)</h1><div style="width:60%;" class="hint--right" data-hint="Please enter the name of the company">Company name<span>* </span><input style="float:right;" type="text" name="company" id="company"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter the name of the contact person">Contact person<span>* </span><input style="float:right;" type="text" name="name" id="name"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter the phone number of the contact person">Phone<span>* </span><input style="float:right;" type="text" name="phone" id="phone"></div><br><div style="width:60%;" class="hint--right" data-hint="Please enter a valid email address">Email<span>* </span><input style="float:right;" type="text" name="email" id="email"></div><br>';  
  }
}








