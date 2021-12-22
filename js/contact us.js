function init() {
	document.getElementById("contactform").addEventListener("submit", checkForErrors);
}
window.addEventListener("load", init);
function checkForErrors(e) {
	var emptyError = document.getElementById("emptyerror");
	emptyError.className = "hidden";
	var emailError = document.getElementById("emailerror");
	emailError.className = "hidden";
	var phoneError = document.getElementById("phoneerror");
	phoneError.className = "hidden";
	var cssSelector = "input[type=text]";
	var fields = document.querySelectorAll(cssSelector);
	var emptyList = [];
	var emailList = [];
	var phoneList = [];
	var emailsign = false;
	for (i = 0; i < fields.length; i++) {
		if (fields[i].value == null || fields[i].value == "") {
			e.preventDefault();
			emptyList.push(fields[i]);
		}
		if (fields[2].value.length != 10) {
			e.preventDefault();
			phoneList.push(fields[2]);
		}
		for (j = 0; j < fields[1].value.length; j++) {
			if (fields[1].value[j] == "@") {
				emailsign = true;
			}
		}
		if (emailsign == false) {
			e.preventDefault();
			emailList.push(fields[1]);
		}

	}
	var emptyMsg = "The following fields can't be empty: ";
	if (emptyList.length > 0) {
		for (i = 0; i < emptyList.length; i++) {
			emptyMsg += emptyList[i].id;
			if (i != (emptyList.length - 1)) {
				emptyMsg += ", ";
			}
		}
		emptyError.innerHTML = "<div>" + emptyMsg + "</div>";
		emptyError.className = "visible";
	}
	var emailMsg = "Email address must contain '@'";
	if (emailList.length > 0) {
		emailError.innerHTML = "<div>" + emailMsg + "</div>";
		emailError.className = "visible";
	}
	var phoneMsg = "Phone number must be in the form: XXXXXXXXXX";
	if (phoneList.length > 0) {
		phoneError.innerHTML = "<div>" + phoneMsg + "</div>";
		phoneError.className = "visible";
	}
}