// Setup the events only when document finished loading
window.addEventListener("load", function(){
}, true);

function onClickDelete(id){
	var result = confirm("Are you sure you want to delete the Restaurant?");
	console.log("ID: " + id);
	if (result) {
		var linkref = "database/deleteRestaurant.php?id=" + id;
		window.location.href = linkref;
	}
}