$(document).ready(function () {
            var date_input = $('input[name="date"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })

<<<<<<< HEAD

=======
$(document).('.ui.dropdown')
  .dropdown();


  
 
>>>>>>> aaa3dc54e77c57f573724b494db71c7cde6f3850
