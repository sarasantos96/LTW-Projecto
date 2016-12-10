<?php
	$search = $_GET['search'];
	$db = new PDO('sqlite:restaurant.db');
	$count = 1;
	$cities = NULL;
	$restaurants = NULL;

	if($search != NULL){
		#Procura restaurantes na cidade com aquele nome
		$city = $db->prepare('SELECT Restaurant.Name AS ResName, Address, PhoneNumber, RestaurantID
							FROM Restaurant, City
							WHERE Restaurant.CityID = City.CityID
							AND City.Name LIKE ?');
		$city->bindValue(1, "%$search%", PDO::PARAM_STR);
		$city->execute();
		$cities = $city->fetchAll();

		#Procura restaurantes com aquele nome
		$restaurant = $db->prepare('SELECT * FROM Restaurant WHERE Restaurant.Name LIKE ?');
		$restaurant->bindValue(1, "%$search%", PDO::PARAM_STR);
		$restaurant->execute();
		$restaurants = $restaurant->fetchAll();
	}else{
		$search = "blank";
	}
?>