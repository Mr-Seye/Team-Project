$(document).on('keypress', function (e) {
	if (e.which == 13) {
		validate();
	}
});
function validate() {
	var username = $("#ufield").val().toLowerCase();
	var password = $("#pfield").val();
	if (username == "alice" && password == "jdSr*mpcRLp6L4vt") {
		window.location = "helpdesk.html";
		return false;
	} else if (username == "clara" && password == "h3x6Yg2MDh@U=gRj") {
		window.location = "claraTS.html";
		return false;
	} else if (username == "bert" && password == "V=L$vK2hRQf@X5_v") {
		window.location = "bertTS.html";
		return false;
	} else if (username == "nick" && password == "pL8U5&DdeR4PfKse") {
		window.location = "nickTS.html";
		return false;
	} else if (username == "ext" && password == "RVvN8_ANU%3y6_eS") {
		window.location = "extTS.html";
		return false;
	} else {
		alert("Incorrect login details");
		return false;
	}
}