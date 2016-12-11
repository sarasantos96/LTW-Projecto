<?php
	$db = new PDO('sqlite:restaurant.db');
	$id = $_GET['id'];
	
	$review = $db->prepare('SELECT * FROM Review WHERE RestaurantID = ?');
	$review->bindValue(1, "$id", PDO::PARAM_STR);
	$review->execute();
	$reviews = $review->fetchAll();
?>