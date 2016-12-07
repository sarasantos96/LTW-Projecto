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

		document.getElementById("signUpButton").style.top = 130+'px';
		
		updateWarning(warning);
		
		return false;
		
	}
	
	$.ajaxSetup({
		async: false
	});

	var usernames = [];
	$.getJSON('signup_check.php', function(data) {
		$.each(data, function(fieldName, fieldValue) {
			usernames.push(fieldValue);
		});
	});
	
	var used_username = false;
	for(var i = 0; i < usernames.length; i++){
		if(username == usernames[i]){
			used_username = true;
			break;
		}
	}
	
	if(used_username){
		updateWarning("Username already taken! Choose another one.");
		
		document.getElementById("signUpButton").style.top = 130+'px';
		
		return false;
	}
	
	if(pass.length < 8){
		updateWarning("Password must be at least 8 caracters long!");
		
		document.getElementById("signUpButton").style.top = 120+'px';
		
		return false;
	}
}

function updateWarning(warning){
var p = document.createElement("p");
	var node = document.createTextNode(warning);
	p.appendChild(node);
	
	var elem = document.getElementById("warnings");
	if(elem.childNodes.length == 1){
		var child = elem.childNodes[0];
		elem.removeChild(child);
	}
	
	elem.appendChild(p);
}
