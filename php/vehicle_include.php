<?php 
echo '<div id="categoryContainer">
	<div style="text-align:center;">
		<input id="type1" type="radio" name="category" value="cat_1" checked="true"> Category 1 &nbsp;&nbsp;&nbsp;
		<input id="type4" type="radio" name="category" value="cat_2"> Category 2 &nbsp;&nbsp;&nbsp;<br><br>
	</div>
	<div style="width:50%;" class="hint--right" data-hint="Please enter the name of the company">Brand<span>*    </span><input style="float:right;" type="text" name="brand" id="brand"></div>
	<div style="width:50%;" class="hint--right" data-hint="Please enter the name of the company">Model<span>* </span><input style="float:right;" type="text" name="deaType" id="deaType"></div>
	<div style="width:50%;" class="hint--right" data-hint="Please enter the name of the company">Serial Number<span>*   </span><input style="float:right;" type="text" name="serial" id="serial"></div>
</div>
<div id="confidentialityContainer">
	<h2>CONFIDENTIALITÉ <span>* </span></h2>
	<div">Let the AED be accessible to the public :&nbsp;
	<input type="radio" name="accessibility" value="accessible"> Yes &nbsp;&nbsp;
	<input type="radio" name="accessibility" value="unaccessible"> No
	</div>
</div>

<div id="fileContainer">	
	<h2>IMAGE<span>* </span></h2>

	
Select a file: <input type="file" name="img">
</div>'




?>