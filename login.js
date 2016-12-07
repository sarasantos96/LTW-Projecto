function submitForm() {
	var username_check = true;
	var password_check = true;

	var username = document.forms["login_form"]["username"].value;
	if (username == "") {
		username_check = false;
	}

	var pass = document.forms["login_form"]["password"].value;
	if (pass == "") {
		password_check = false;
	}

	if(!username_check || !password_check){
		var names = [];
		var warning;
		
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

		document.getElementById("logInButton").style.top = 110+'px';
		
		var p = document.createElement("p");
		var node = document.createTextNode(warning);
		p.appendChild(node);
		
		var elem = document.getElementById("warnings");
		
		if(elem.childNodes.length == 1){
			var child = elem.childNodes[0];
			elem.removeChild(child);
		}
		
		elem.appendChild(p);
		
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
	
	var existing_username = false;
	for(var i = 0; i < usernames.length; i++){
		if(username == usernames[i]){
			existing_username = true;
			break;
		}
	}
	
	if(!existing_username){
		var user_warning = "Username doesn't exist!";
		var p = document.createElement("p");
		var node = document.createTextNode(user_warning);
		p.appendChild(node);
		
		var elem = document.getElementById("warnings");
		if(elem.childNodes.length == 1){
			var child = elem.childNodes[0];
			elem.removeChild(child);
		}
		
		elem.appendChild(p);
		
		document.getElementById("logInButton").style.top = 95+'px';
		
		return false;
	}
}