// Setup the events only when document finished loading
window.addEventListener("load", function(){
}, true);
/*
function submitForm() {
	var name = document.forms["signup_form"]["name"].value;
	if (name == "") {
		alert("Name must be filled out");
		return false;
	}
	
	var username = document.forms["signup_form"]["username"].value;
	if (username == "") {
		alert("Username must be filled out");
		return false;
	}
	
	var pass = document.forms["signup_form"]["password"].value;
	if (pass == "") {
		alert("Password must be filled out");
		return false;
	}
	
}*/

function submitForm() {
	var name = document.forms["signup_form"]["name"].value;
	if (name == "") {
		document.getElementById("warnings").innerHTML = "Name must be filled out";
		return false;
	}
	
	var username = document.forms["signup_form"]["username"].value;
	if (username == "") {
		document.getElementById("warnings").innerHTML = "Username must be filled out";
		return false;
	}
	
	var pass = document.forms["signup_form"]["password"].value;
	if (pass == "") {
		document.getElementById("warnings").innerHTML = "Password must be filled out";
		return false;
	}
	
}