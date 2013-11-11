<?php 
echo '
	<div id="categoryContainer" >
	
	<div style="text-align:center;">
		<input id="type1" type="radio" name="category" value="cat_1" checked="true"> Category 1 &nbsp;&nbsp;&nbsp;
		<input id="type4" type="radio" name="category" value="cat_2"> Category 2 &nbsp;&nbsp;&nbsp;<br><br>
	</div>
	<div style="width:50%;" class="hint--right" data-hint="Please enter the name of the company">Brand<span>*    </span><input style="float:right;" type="text" name="brand" id="brand"></div>
	<div style="width:50%;" class="hint--right" data-hint="Please enter the name of the company">Model<span>* </span><input style="float:right;" type="text" name="deaType" id="deaType"></div>
	<div style="width:50%;" class="hint--right" data-hint="Please enter the name of the company">Serial number<span>*   </span><input style="float:right;" type="text" name="serial" id="serial"></div>
</div>

<div id="availability">	
	<h2>DISPONIBILITÉ :<span>* </span></h2>
	<div id="timesType">
		<input type="radio" name="timesType" value="0" onclick="timeType()" checked="true"> Custom times &nbsp;&nbsp;
		<input type="radio" name="timesType" value="1" onclick="timeType()"> Opened all the time &nbsp;&nbsp;
	</div>
	<div id="customContainer">
	
		<div id="mondayContainer" >
			<input type="checkbox" name="monday" id="monday" onclick="daysType()"/> Monday
			<div id="mondayClosed" style="float:right;">Closed</div>
			<div id="mondayInputs" style="display:none; float:right;">
				From <input class="fieldset__input js__timepicker" name="time1" type="text" size="3" placeholder="00:00">
				to   <input class="fieldset__input js__timepicker" name="time2" type="text" size="3" placeholder="00:00">
			</div>
		</div>
		<div id="tuesdayContainer" >
			<input type="checkbox" name="tuesday" id="tuesday" onclick="daysType()"/> Tuesday
			<div id="tuesdayClosed" style="float:right;">Closed</div>
			<div id="tuesdayInputs" style="display:none; float:right;">
				From <input class="fieldset__input js__timepicker" name="time3" type="text" size="3" placeholder="00:00">
				to   <input class="fieldset__input js__timepicker" name="time4" type="text" size="3" placeholder="00:00">
			</div>
		</div>
		<div id="wednesdayContainer" >
			<input type="checkbox" name="wednesday" id="wednesday" onclick="daysType()"/> Wednesday
			<div id="wednesdayClosed" style="float:right;">Closed</div>
			<div id="wednesdayInputs" style="display:none; float:right;">
				From <input class="fieldset__input js__timepicker" name="time5" type="text" size="3" placeholder="00:00">
				to   <input class="fieldset__input js__timepicker" name="time6" type="text" size="3" placeholder="00:00">
			</div>
		</div>
		<div id="thursdayContainer" >
			<input type="checkbox" name="thursday" id="thursday" onclick="daysType()"/> Thursday
			<div id="thursdayClosed" style="float:right;">Closed</div>
			<div id="thursdayInputs" style="display:none; float:right;">
				From <input class="fieldset__input js__timepicker" name="time7" type="text" size="3" placeholder="00:00">
				to   <input class="fieldset__input js__timepicker" name="time8" type="text" size="3" placeholder="00:00">
			</div>
		</div>
		<div id="fridayContainer" >
			<input type="checkbox" name="friday" id="friday" onclick="daysType()"/> Friday
			<div id="fridayClosed" style="float:right;">Closed</div>
			<div id="fridayInputs" style="display:none; float:right;">
				From <input class="fieldset__input js__timepicker" name="time9" type="text" size="3" placeholder="00:00">
				to   <input class="fieldset__input js__timepicker" name="time10" type="text" size="3" placeholder="00:00">
			</div>
		</div>
		<div id="saturdayContainer" >
			<input type="checkbox" name="saturday" id="saturday" onclick="daysType()"/> Saturday
			<div id="saturdayClosed" style="float:right;">Closed</div>
			<div id="saturdayInputs" style="display:none; float:right;">
				From <input class="fieldset__input js__timepicker" name="time11" type="text" size="3" placeholder="00:00">
				to   <input class="fieldset__input js__timepicker" name="time12" type="text" size="3" placeholder="00:00">
			</div>
		</div>
		<div id="sundayContainer">
			<input type="checkbox" name="sunday" id="sunday" onclick="daysType()"/> Sunday
			<div id="sundayClosed" style="float:right;">Closed</div>
			<div id="sundayInputs" style="display:none; float:right;">
				From <input class="fieldset__input js__timepicker" name="time13" type="text" size="3" placeholder="00:00">
				to   <input class="fieldset__input js__timepicker" name="time14" type="text" size="3" placeholder="00:00">
			</div>
		</div>
	</div>
	<div id="fullTimeContainer" style="display:none; text-align:center;">THE AED IS AVAILABLE ALL THE TIME (24/7)
	</div>
	<div id="lunchTime" style="padding-top:10px;">Is the AED available during lunch hours?
		<input type="radio" name="lunchTime" value="0"> Yes &nbsp;
		<input type="radio" name="lunchTime" value="1" > No &nbsp;
	</div>
	<div id="bankHolidays">Is the AED available during bank holidays?
		<input type="radio" name="bankHolidays" value="0"> Yes &nbsp;
		<input type="radio" name="bankHolidays" value="1" > No &nbsp;
	</div>
</div>
<div id="descriptionContainer">
	<h2>EMPLACEMENT DU DEA: <span>* </span></h2>
	
	<textarea  name="description" id="description" form="myform" placeholder="Please specifiy where the AED is located indoors"></textarea>
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
	<div>	
		<label for="file">Filename:</label>
		<input type="file" name="uploaded_file" id="imgInp"><br>
	</div>
	<div>
	 	<img  style="padding:10px;" id="blah" src="#"   width="200"/>
	</div>
</div>'




?>