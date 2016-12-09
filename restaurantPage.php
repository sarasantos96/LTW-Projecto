<?php
	session_start();
	
	$db = new PDO('sqlite:restaurant.db');
	$id = $_GET['id'];
	
	$restaurant = $db->prepare('SELECT * FROM Restaurant WHERE RestaurantID = ?');
	$restaurant->bindValue(1, "$id", PDO::PARAM_STR);
	$restaurant->execute();
	$restData = $restaurant->fetch();
	
	echo $restData['Name'];
	echo PHP_EOL ;
	echo $restData['Address'];
	echo PHP_EOL ;
	echo $restData['PhoneNumber'];
?>