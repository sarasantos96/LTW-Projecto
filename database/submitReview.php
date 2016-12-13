<?php
	
	session_start();
	$rating = $_POST['rating'];
	$review = $_POST['review'];
	$ResID = $_GET['id'];
	
	$db = new PDO('sqlite:../restaurant.db');
	
	$db_get_reviewerID = $db->prepare('SELECT ClientID FROM Client WHERE Username = ?');
    $db_get_reviewerID->execute(array($_SESSION['username']));
    $db_get_reviewerID_result = $db_get_reviewerID->fetch();

	$reviewer_ID = $db_get_reviewerID_result[0];
	
	if($review == "")
		$review ="No writen review";
	
	$stmt = $db->prepare("INSERT INTO Review(ReviewID, ReviewerID, Review, Score, RestaurantID) VALUES (null, :rev, :tex, :sco, :res)");
	$stmt->bindParam(':rev', $reviewer_ID);
	$stmt->bindParam(':tex', $review);
	$stmt->bindParam(':sco', $rating);
	$stmt->bindParam(':res', $ResID);
	$stmt->execute();
	
	$linkTo = "Location: ../restaurantPage.php?id={$ResID}";
	header($linkTo);
	
?>