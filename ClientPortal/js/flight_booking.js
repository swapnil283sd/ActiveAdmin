$(document).ready(function () {
            var date_input = $('input[id="startdate"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'dd/mm/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
		
$(document).ready(function () {
            var date_input = $('input[id="enddate"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'dd/mm/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })

 
          $(document).ready(function() {
              $('.dropdown').dropdown();
              $('.ui.checkbox').checkbox();
          });
