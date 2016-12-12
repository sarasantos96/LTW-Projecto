<?php
	function restaurantName($id){
		$db = new PDO('sqlite:restaurant.db');

		$stmt = $db->prepare('SELECT Name FROM Restaurant WHERE RestaurantID = ?');
		$stmt->execute(array($id));
		$result = $stmt->fetch();

		return $result['Name'];
	}

	function restaurantAddress($id){
		$db = new PDO('sqlite:restaurant.db');

		$stmt = $db->prepare('SELECT Address FROM Restaurant WHERE RestaurantID = ?');
		$stmt->execute(array($id));
		$result = $stmt->fetch();

		return $result['Address'];
	}

	function restaurantPhoneNumber($id){
		$db = new PDO('sqlite:restaurant.db');

		$stmt = $db->prepare('SELECT PhoneNumber FROM Restaurant WHERE RestaurantID = ?');
		$stmt->execute(array($id));
		$result = $stmt->fetch();

		return $result['PhoneNumber'];
	}

	function restaurantCity($id){
		$db = new PDO('sqlite:restaurant.db');

		$stmt = $db->prepare('SELECT City.Name AS City FROM Restaurant LEFT JOIN City
							ON Restaurant.CityID = City.CityID WHERE RestaurantID = ?');
		$stmt->execute(array($id));
		$result = $stmt->fetch();

		return $result['City'];
	}

	function restaurantPhoto($id){
		$db = new PDO('sqlite:restaurant.db');

		$stmt = $db->prepare('SELECT Photo FROM Restaurant WHERE RestaurantID = ?');
		$stmt->execute(array($id));
		$result = $stmt->fetch();

		return $result['Photo'];
	}
	
	function reviewReplies($reviewID){
		$db = new PDO('sqlite:restaurant.db');

		$stmt = $db->prepare('SELECT * FROM Reply WHERE ReviewID = ?');
		$stmt->execute(array($reviewID));
		$result = $stmt->fetchAll();

		return $result;
	}

	function setRestaurantName($id, $name){
		$db = new PDO('sqlite:../restaurant.db');

		$stmt = $db->prepare('UPDATE Restaurant SET Name = ? WHERE RestaurantID = ?');
		$stmt->execute(array($name, $id));
	}

	function setRestaurantAddress($id, $address){
		$db = new PDO('sqlite:../restaurant.db');

		$stmt = $db->prepare('UPDATE Restaurant SET Address = ? WHERE RestaurantID = ?');
		$stmt->execute(array($address, $id));
	}

	function setRestaurantPhoneNumber($id, $address){
		$db = new PDO('sqlite:../restaurant.db');

		$stmt = $db->prepare('UPDATE Restaurant SET PhoneNumber = ? WHERE RestaurantID = ?');
		$stmt->execute(array($address, $id));
	}

	function setRestaurantCity($id, $city){
		$db = new PDO('sqlite:../restaurant.db');

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

		$stmt = $db->prepare('UPDATE Restaurant SET CityID = ? WHERE RestaurantID = ?');
		$stmt->execute(array($city_ID, $id));
	}
?>
