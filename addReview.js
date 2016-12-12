// Setup the events only when document finished loading
window.addEventListener("load", function(){
}, true);

var userRating;
function codeAddress() {
	document.getElementById("form_id").style.display = "none";
}
window.onload = codeAddress;

function review_click(){
	console.log("clicked");
	document.getElementById("form_id").style.display = "inline";
	document.getElementById("review_button").style.display = "none";
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
		window.onload = null;
		return false;
	}
}