$(function() {
    $("[name=times]").click(function(){
            $('.toHide').hide();
            $("#timesContainer"+$(this).val()).show('slow');
    });
 });


function disponibilityToggle() {
  if (document.forms.myForm.monday.checked==true) {
	 document.getElementById('mondayTimes').innerHTML = '';
  };
  if (document.forms.myForm.monday.checked==false) {
	document.getElementById('mondayTimes').innerHTML = 'CLOSED';
  };
}




