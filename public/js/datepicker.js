$(function() {
  $( "#datepicker" ).datepicker( {
      onSelect: function(date) {
        $("#Date_Of_Birth").val(date);
    }, 
    dateFormat : "yy-mm-dd", 
    changeMonth: true,
    changeYear: true
  });
});
