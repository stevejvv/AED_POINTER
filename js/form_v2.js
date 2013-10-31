function teste() {
  if (document.forms.myForm.type1[0].checked==true) {
      document.getElementById('basicInfoContainer').innerHTML = '<h1>INFORMATION GENERALE (Entreprise)</h1>Entreprise<span>* </span><input type="text" name="company" id="company"><br>Personne de contact<span>* </span><input type="text" name="name" id="name"><br>Téléphone<span>*   </span><input type="text" name="phone" id="phone"><br>Email<span>*   </span><input type="text" name="email" id="email"><br>';
}
  if (document.forms.myForm.type1[1].checked==true) {
      document.getElementById('basicInfoContainer').innerHTML = '<h1>INFORMATION GENERALE (Lieu Public)</h1>Organisme<span>* </span><input type="text" name="organisme" id="organisme"><br>Personne de contact<span>*    </span><input type="text" name="name" id="name"><br>Phone<span>*   </span><input type="text" name="phone" id="phone"><br>Email<span>*   </span><input type="text" name="email" id="email"><br>';
 };
  if (document.forms.myForm.type1[2].checked==true) {
      document.getElementById('basicInfoContainer').innerHTML = '<h1>INFORMATION GENERALE (Particuliers)</h1>Name<span>* </span><input type="text" name="name" id="name"><br>Phone<span>* </span><input type="text" name="phone" id="phone"><br>Email<span>* </span><input type="text" name="email" id="email"><br>';
  }
  if (document.forms.myForm.type1[3].checked==true) {
	  document.getElementById('basicInfoContainer').innerHTML = '<h1>INFORMATION GENERALE (Vehicle)</h1>Name<span>* </span><input type="text" name="name" id="name"><br>Company<span>* </span><input type="text" name="company" id="company"><br>Phone<span>* </span><input type="text" name="phone" id="phone"><br>Email<span>* </span><input type="text" name="email" id="email"><br>';  
  }
}








