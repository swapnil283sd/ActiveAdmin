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
function disableElement() {
    if (document.getElementById("check").checked) {
        document.getElementById("preferance1").disabled = true;
        document.getElementById("preferance2").disabled = true;
    }
    else {
        document.getElementById("preferance1").disabled = false;
        document.getElementById("preferance2").disabled = false;
    }
}