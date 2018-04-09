$(document).ready(function () {
    var date_input = $('input[id="checkin"]'); //our date input has the id "checkin"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    })
})

$(document).ready(function () {
    var date_input = $('input[id="checkout"]'); //our date input has the id "checkin"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    })
})

function disableElement() {
    if (document.getElementById("check").checked) {
        document.getElementById("preferenceone").disabled = true;
        document.getElementById("preferencetwo").disabled = true;
    }
    else {
        document.getElementById("preferenceone").disabled = false;
        document.getElementById("preferencetwo").disabled = false;
    }
}