// Setup the events only when document finished loading
window.addEventListener("load", function(){
}, true);

function submitForm(){
	var name_check = true;
	var username_check = true;
	var newpassword_check = true;

	var name = document.forms["edit_form"]["name"].value;
	if (name == "") {
		name_check = false;
	}

	var username = document.forms["edit_form"]["username"].value;
	if (username == "") {
		username_check = false;
	}

	var newpass = document.forms["edit_form"]["newpassword"].value;
  var oldpass = document.forms["edit_form"]["oldpassword"].value;
	if ((oldpass != "" && newpass == "") || (oldpass == "" && newpass != "")) {
		  newpassword_check = false;
	}

	if(!name_check || !username_check || !newpassword_check){
		var names= [];
		var warning;
		if(!name_check)
			names.push("name");
		if(!username_check)
			names.push("username");
		if(!newpassword_check)
			names.push("all password");

		warning = buildWarning(names);
		updateWarning(warning);

		return false
	}

	return true;
}

function buildWarning(names){
	var warning;

	if(names.length == 1){
		warning = "The " + names[0] + " parameter must be filled";
	}
	if(names.length == 2){
		warning = "The " + names[0] + " and " + names[1] + " parameters must be filled";
	}
	if(names.length == 3)
		warning = "The " + names[0] + ", " + names[1] + " and " +  names[2] + " parameters must be filled";
	if(names.length == 4)
		warning = "The " + names[0] + ", " + names[1] + ", " + names[2] + " and " +  names[3] + " parameters must be filled";

	return warning;
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
