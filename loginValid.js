$(document).on('keypress', function (e) {
	if (e.which == 13) {
		validate();
	}
});
function validate() {
	var username = $("#ufield").val();
	var password = $("#pfield").val();
	if (username == "user" && password == "admin") {
		window.location = "helpdesk.html"; // Redirecting to other page.
		return false;
	}
    else if (username == "Clara" && password == "1") {
		window.location = "helpdesk.html"; // Redirecting to other page.
		return false;
	}
    else if (username == "Bert" && password == "2") {
		window.location = "helpdesk.html"; // Redirecting to other page.
		return false;
    } else {
		alert("Incorrect login details");
		return false;
	}
}