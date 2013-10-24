jQuery(function() {

    // Use default settings
    $("#time1, #time2").timePicker();

    // Store time used by duration.
    var oldTime = $.timePicker("#time1").getTime();

    // Keep the duration between the two inputs.
    $("#time1").change(function() {
      if ($("#time2").val()) { // Only update when second input has a value.
        // Calculate duration.
        var duration = ($.timePicker("#time2").getTime() - oldTime);
        var time = $.timePicker("#time1").getTime();
        // Calculate and update the time in the second input.
        $.timePicker("#time2").setTime(new Date(new Date(time.getTime() + duration)));
        oldTime = time;
      }
    });
    // Validate.
    $("#time2").change(function() {
      if($.timePicker("#time1").getTime() > $.timePicker(this).getTime()) {
        $(this).addClass("error");
      }
      else {
        $(this).removeClass("error");
      }
    });

  });
jQuery(function() {

    // Use default settings
    $("#time3, #time4").timePicker();

    // Store time used by duration.
    var oldTime = $.timePicker("#time3").getTime();

    // Keep the duration between the two inputs.
    $("#time3").change(function() {
      if ($("#time4").val()) { // Only update when second input has a value.
        // Calculate duration.
        var duration = ($.timePicker("#time4").getTime() - oldTime);
        var time = $.timePicker("#time3").getTime();
        // Calculate and update the time in the second input.
        $.timePicker("#time4").setTime(new Date(new Date(time.getTime() + duration)));
        oldTime = time;
      }
    });
    // Validate.
    $("#time4").change(function() {
      if($.timePicker("#time3").getTime() > $.timePicker(this).getTime()) {
        $(this).addClass("error");
      }
      else {
        $(this).removeClass("error");
      }
    });

  });
jQuery(function() {

    // Use default settings
    $("#time5, #time6").timePicker();

    // Store time used by duration.
    var oldTime = $.timePicker("#time5").getTime();

    // Keep the duration between the two inputs.
    $("#time5").change(function() {
      if ($("#time6").val()) { // Only update when second input has a value.
        // Calculate duration.
        var duration = ($.timePicker("#time6").getTime() - oldTime);
        var time = $.timePicker("#time5").getTime();
        // Calculate and update the time in the second input.
        $.timePicker("#time6").setTime(new Date(new Date(time.getTime() + duration)));
        oldTime = time;
      }
    });
    // Validate.
    $("#time6").change(function() {
      if($.timePicker("#time5").getTime() > $.timePicker(this).getTime()) {
        $(this).addClass("error");
      }
      else {
        $(this).removeClass("error");
      }
    });

  });
jQuery(function() {

    // Use default settings
    $("#time7, #time8").timePicker();

    // Store time used by duration.
    var oldTime = $.timePicker("#time7").getTime();

    // Keep the duration between the two inputs.
    $("#time7").change(function() {
      if ($("#time8").val()) { // Only update when second input has a value.
        // Calculate duration.
        var duration = ($.timePicker("#time8").getTime() - oldTime);
        var time = $.timePicker("#time7").getTime();
        // Calculate and update the time in the second input.
        $.timePicker("#time8").setTime(new Date(new Date(time.getTime() + duration)));
        oldTime = time;
      }
    });
    // Validate.
    $("#time8").change(function() {
      if($.timePicker("#time7").getTime() > $.timePicker(this).getTime()) {
        $(this).addClass("error");
      }
      else {
        $(this).removeClass("error");
      }
    });

  });
jQuery(function() {

    // Use default settings
    $("#time9, #time10").timePicker();

    // Store time used by duration.
    var oldTime = $.timePicker("#time9").getTime();

    // Keep the duration between the two inputs.
    $("#time9").change(function() {
      if ($("#time10").val()) { // Only update when second input has a value.
        // Calculate duration.
        var duration = ($.timePicker("#time10").getTime() - oldTime);
        var time = $.timePicker("#time9").getTime();
        // Calculate and update the time in the second input.
        $.timePicker("#time10").setTime(new Date(new Date(time.getTime() + duration)));
        oldTime = time;
      }
    });
    // Validate.
    $("#time10").change(function() {
      if($.timePicker("#time9").getTime() > $.timePicker(this).getTime()) {
        $(this).addClass("error");
      }
      else {
        $(this).removeClass("error");
      }
    });

  });
jQuery(function() {

    // Use default settings
    $("#time11, #time12").timePicker();

    // Store time used by duration.
    var oldTime = $.timePicker("#time11").getTime();

    // Keep the duration between the two inputs.
    $("#time11").change(function() {
      if ($("#time12").val()) { // Only update when second input has a value.
        // Calculate duration.
        var duration = ($.timePicker("#time12").getTime() - oldTime);
        var time = $.timePicker("#time11").getTime();
        // Calculate and update the time in the second input.
        $.timePicker("#time12").setTime(new Date(new Date(time.getTime() + duration)));
        oldTime = time;
      }
    });
    // Validate.
    $("#time12").change(function() {
      if($.timePicker("#time11").getTime() > $.timePicker(this).getTime()) {
        $(this).addClass("error");
      }
      else {
        $(this).removeClass("error");
      }
    });

  });
jQuery(function() {

    // Use default settings
    $("#time13, #time14").timePicker();

    // Store time used by duration.
    var oldTime = $.timePicker("#time13").getTime();

    // Keep the duration between the two inputs.
    $("#time13").change(function() {
      if ($("#time14").val()) { // Only update when second input has a value.
        // Calculate duration.
        var duration = ($.timePicker("#time14").getTime() - oldTime);
        var time = $.timePicker("#time13").getTime();
        // Calculate and update the time in the second input.
        $.timePicker("#time14").setTime(new Date(new Date(time.getTime() + duration)));
        oldTime = time;
      }
    });
    // Validate.
    $("#time14").change(function() {
      if($.timePicker("#time13").getTime() > $.timePicker(this).getTime()) {
        $(this).addClass("error");
      }
      else {
        $(this).removeClass("error");
      }
    });

  });








$(function () {
  $('#monday').change(function () {                
     $('#mondayTimes').toggle(this.checked);
  }).change(); //ensure visible state matches initially
});
$(function () {
  $('#tuesday').change(function () {                
     $('#tuesdayTimes').toggle(this.checked);
  }).change(); //ensure visible state matches initially
});
$(function () {
  $('#wednesday').change(function () {                
     $('#wednesdayTimes').toggle(this.checked);
  }).change(); //ensure visible state matches initially
});
$(function () {
  $('#thursday').change(function () {                
     $('#thursdayTimes').toggle(this.checked);
  }).change(); //ensure visible state matches initially
});
$(function () {
  $('#friday').change(function () {                
     $('#fridayTimes').toggle(this.checked);
  }).change(); //ensure visible state matches initially
});
$(function () {
  $('#saturday').change(function () {                
     $('#saturdayTimes').toggle(this.checked);
  }).change(); //ensure visible state matches initially
});
$(function () {
  $('#sunday').change(function () {                
     $('#sundayTimes').toggle(this.checked);
  }).change(); //ensure visible state matches initially
});