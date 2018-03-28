function validateForm() {
    var x = document.forms["hotel"]["guest_name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}

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

