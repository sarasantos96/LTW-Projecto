<?php
	$cityname = $_GET['cityName'];	

	$db = new PDO('sqlite:restaurant.db');

	$sth = $db->prepare('SELECT Restaurant.Name FROM Restaurant, City WHERE Restaurant.CityID = City.CityID AND City.Name = :cityname');
	$sth->bindParam(':cityname', $cityname);
	$sth->execute();
	
	$result = $sth->fetchAll();

	foreach($result as $restaurant){
		echo '<p>' . $restaurant['Name'] . '</p>';
	}
?>