// Setup the events only when document finished loading
window.addEventListener("load", function(){
}, true);

var temp_ids = [];

var userRating;
function codeAddress() {
	var reply_forms = document.getElementsByClassName("reply_form_class");
	for(var i = 0; i < reply_forms.length; i++){
		reply_forms[i].style.display= "none";
	}
}
window.onload = codeAddress;

function review_click(){
	console.log("clicked");
}

$(document).ready(function(){
//  Check Radio-box
	$(".rating input:radio").attr("checked", false);
	$('.rating input').click(function () {
		$(".rating span").removeClass('checked');
		$(this).parent().addClass('checked');
	});

	$('input:radio').change(
	function(){
		var userRating = this.value;
	});
});

function review_submit(){
	var rating = document.forms["review_form"]["rating"].value;
	if(rating == ""){
		updateWarning("Select a rating before submiting!");
		return false;
	}

	var review = document.forms["review_form"]["review"].value;
	if(review.length > 140){
		updateWarning("Reviews cannot have more than 140 characters.");
		return false;
	}
}

function reply_submit(id){
	var reply_forms = document.getElementsByClassName("reply_form_class");
	if(reply_forms[id-1]['reply'].value == ""){
		updateWarningClass("Write something, you must", id);
		return false;
	}
}

function updateWarningClass(warning, id){
	var p = document.createElement("p");
	var node = document.createTextNode(warning);
	p.appendChild(node);

	var elems = document.getElementsByClassName("warnings");
	elem = elems[id-1];
	if(elem.childNodes.length == 1){
		var child = elem.childNodes[0];
		elem.removeChild(child);
	}

	elem.appendChild(p);
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

function addReply(id){
	var elem = document.getElementById(id);
	if(elem.style.display == "none")
		elem.style.display = "inline";
	else
		elem.style.display = "none";
}
