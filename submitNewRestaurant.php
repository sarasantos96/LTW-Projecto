<?php
	session_start();
	$tt = $_SESSION['username'];
	echo $tt;
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	
	$db = new PDO('sqlite:restaurant.db');
	
	$db_city = $db->prepare('SELECT CityID FROM City WHERE Name = ?');
    $db_city->execute(array($city));
    $db_city_result = $db_city->fetch();
	
	if($db_city_result == null){
		$add_new_city = $db->prepare("INSERT INTO City(CityID, Name) VALUES (null, :cit)");
		$add_new_city->bindParam(':cit', $city);
		$add_new_city->execute();
	}
	
	$db_get_cityID = $db->prepare('SELECT CityID FROM City WHERE Name = ?');
    $db_get_cityID->execute(array($city));
    $db_get_cityID_result = $db_get_cityID->fetch();
	
	$city_ID = $db_get_cityID_result[0];
	
	$db_get_ownerID = $db->prepare('SELECT ClientID FROM Client WHERE Username = ?');
    $db_get_ownerID->execute(array($_SESSION['username']));
    $db_get_ownerID_result = $db_get_ownerID->fetch();
	
	$owner_ID = $db_get_ownerID_result[0];
	
	$stmt = $db->prepare("INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
						VALUES (null, :nam, :add, :pho, :city, :own);");
	$stmt->bindParam(':nam', $name);
	$stmt->bindParam(':add', $address);
	$stmt->bindParam(':pho', $phone);
	$stmt->bindParam(':city', $city_ID);
	$stmt->bindParam(':own', $owner_ID);
	$stmt->execute(); 
	
	header('Location: userPage.php');
?>