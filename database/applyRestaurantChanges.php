<?php
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$id = $_GET['id'];
	
	$db = new PDO('sqlite:../restaurant.db');
	include_once('restaurantData.php');
	
	setRestaurantName($id, $name);
	setRestaurantAddress($id, $address);
	setRestaurantPhoneNumber($id, $phone);
	setRestaurantCity($id, $city);
	
	$link = "Location: ../restaurantPage.php?id={$id}";
	header($link);
?>