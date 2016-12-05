// Setup the events only when document finished loading
window.addEventListener("load", function(){
}, true);

function submitForm() {
	var name_check = true;
	var username_check = true;
	var password_check = true;

	var name = document.forms["signup_form"]["name"].value;
	if (name == "") {
		name_check = false;
	}

	var username = document.forms["signup_form"]["username"].value;
	if (username == "") {
		username_check = false;
	}

	var pass = document.forms["signup_form"]["password"].value;
	if (pass == "") {
		password_check = false;
	}

	if(!name_check || !username_check || !password_check){
		var names = [];
		var warning;
		if(!name_check)
			names.push("name");
		if(!username_check)
			names.push("username");
		if(!password_check)
			names.push("password");

		if(names.length == 1){
			warning = "The " + names[0] + " parameter must be filled";
		}
		if(names.length == 2){
			warning = "The " + names[0] + " and " + names[1] + " parameters must be filled";
		}
		if(names.length == 3)
			warning = "The " + names[0] + ", " + names[1] + " and " +  names[2] + " parameters must be filled";

		document.getElementById("warnings").innerHTML = warning;
		document.getElementById("signUpButton").style.top = 110+'px';

		return false;
	}

}

/*
function submitForm() {
	var name = document.forms["signup_form"]["name"].value;
	if (name == "") {
		document.getElementById("signUpButton").style.top = 60+'px';
		document.getElementById("warnings").innerHTML = "Name must be filled out";
		return false;
	}

	var username = document.forms["signup_form"]["username"].value;
	if (username == "") {
		document.getElementById("signUpButton").style.top = 60+'px';
		document.getElementById("warnings").innerHTML = "Username must be filled out";
		return false;
	}

	var pass = document.forms["signup_form"]["password"].value;
	if (pass == "") {
		document.getElementById("signUpButton").style.top = 60+'px';
		document.getElementById("warnings").innerHTML = "Password must be filled out";
		return false;
	}

}
*/
