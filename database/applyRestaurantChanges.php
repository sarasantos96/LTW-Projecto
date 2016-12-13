<?php
	session_start();

	$token = $_POST['csrf'];

	if($token != $_SESSION['csrf']){
		echo 'Permission Denied';
	}else{
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

		$link = "Location: ../userPage.php";
		header($link);
	}
?>
