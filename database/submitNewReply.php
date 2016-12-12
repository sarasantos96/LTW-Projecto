<?php
	
	$reviewID = $_GET['reviewID'];
	$reply = $_POST['reply'];
	$ResID = $_GET['id'];
	
	$stmt = $db->prepare("INSERT INTO Reply(ReplyID, ReviewID, Reply) VALUES (null, :rev, :rep)");
	$stmt->bindParam(':rev', $reviewID);
	$stmt->bindParam(':rep', $reply);
	$stmt->execute();
	
	$linkTo = "Location: ../restaurantPage.php?id={$ResID}";
	header($linkTo);

?>