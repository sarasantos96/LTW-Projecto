<?php
	$db = new PDO('sqlite:restaurant.db');
	$id = $_GET['id'];
	
	$restaurant = $db->prepare('SELECT * FROM Restaurant WHERE RestaurantID = ?');
	$restaurant->bindValue(1, "$id", PDO::PARAM_STR);
	$restaurant->execute();
	$restData = $restaurant->fetch();
?>