<?php
	$search = $_GET['search'];
	$db = new PDO('sqlite:restaurant.db');
	$count = 1;
	$restaurants = NULL;

	if($search != NULL){
		#Procura restaurantes na cidade com aquele nome
		$query = $db->prepare('SELECT Restaurant.Name as ResName, Address, PhoneNumber, RestaurantID
							FROM Restaurant, City
							WHERE Restaurant.CityID = City.CityID
							AND City.Name LIKE ?');
		$query->bindValue(1, "%$search%", PDO::PARAM_STR);
		$query->execute();
		$restaurants = $query->fetchAll();
		
		if($restaurants == NULL){
			#Procura restaurantes com aquele nome
			$query = $db->prepare('SELECT Restaurant.Name as ResName, Address, PhoneNumber, RestaurantID 
								FROM Restaurant 
								WHERE Restaurant.Name LIKE ?');
			$query->bindValue(1, "%$search%", PDO::PARAM_STR);
			$query->execute();
			$restaurants = $query->fetchAll();
		}
	}else{
		$search = "blank";
	}
?>