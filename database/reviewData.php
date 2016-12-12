<?php
	function getReviews($id){
		$db = new PDO('sqlite:restaurant.db');
		
		$review = $db->prepare('SELECT * FROM Review WHERE RestaurantID = ?');
		$review->bindValue(1, "$id", PDO::PARAM_STR);
		$review->execute();
		$reviews = $review->fetchAll();
		
		return $reviews;
	}
	
	function reviewer($id){
		$db = new PDO('sqlite:restaurant.db');
		
		$review = $db->prepare('SELECT Name FROM Client WHERE ClientID= ?');
		$review->execute(array($id));
		$name = $review->fetch();
		
		return $name['Name'];
	}
	
	function reviewerPic($id){
		$db = new PDO('sqlite:restaurant.db');
		
		$review = $db->prepare('Select Photo from Client WHERE ClientID=?');
		$review->execute(array($id));
		$pic = $review->fetch();
		
		return $pic['Photo'];
		
	}
	
	function reviewerUsername($id){
		$db = new PDO('sqlite:restaurant.db');
		
		$review = $db->prepare('SELECT Username FROM Client WHERE ClientID= ?');
		$review->execute(array($id));
		$name = $review->fetch();
		
		return $name['Username'];
	}
	
	function reviewScore($id){
		$db = new PDO('sqlite:restaurant.db');
		
		$review = $db->prepare('SELECT Score FROM Review WHERE RestaurantID = ?');
		$review->execute(array($id));
		$score = $review->fetch();
		
		return $score['Score'];
	}
?>