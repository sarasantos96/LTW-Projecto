// Setup the events only when document finished loading
window.addEventListener("load", function(){
}, true);

function submitForm(){
	var name_check = true;
	var address_check = true;
	var phone_check = true;
	var city_check = true;
	
	var name = document.forms["info_form"]["name"].value;
	if (name == "") {
		name_check = false;
	}
	
	var address = document.forms["info_form"]["address"].value;
	if (address == "") {
		address_check = false;
	}
	
	var phone = document.forms["info_form"]["phone"].value;
	if (phone == "") {
		phone_check = false;
	}
	
	var city = document.forms["info_form"]["city"].value;
	if (city == "") {
		city_check = false;
	}
	
	if(!name_check || !address_check || !phone_check || !city_check){
		var names= [];
		var warning;
		if(!name_check)
			names.push("name");
		if(!address_check)
			names.push("address");
		if(!phone_check)
			names.push("phone number");
		if(!city_check)
			names.push("city");
		
		warning = buildWarning(names);
		updateWarning(warning);
		
		return false
	}
	
	if(phone.length != 9){
		var warning = "Phone number must have 9 digits";
		updateWarning(warning)
		return false;
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