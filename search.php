<?php
	$search = $_GET['search'];
	$db = new PDO('sqlite:restaurant.db');
	
	#Procura restaurantes na cidade com aquele nome
	$city = $db->prepare('SELECT Restaurant.Name AS ResName, Address, PhoneNumber
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
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Restaurants in <?=$cityname?></title>
		<meta charset="UTF-8">
	</head>
	<body>
		<div id="result">
			<?php if($cities == NULL): ?>
				<?php if($restaurants == NULL): ?>
					<p> Não encontrou nada </p>
				<?php else: ?>
					<?php foreach($restaurants as $row): ?>
						<div class="restaurants">
							<p class="restaurant"> 
								<?=$row['Name']?></br>
								<?=$row['Address']?></br>
								<?=$row['PhoneNumber']?>
							</p>
						</div>
					<?php endforeach; ?>
				<?php endif ?>
			<?php else: ?>
				<?php foreach($cities as $row): ?>
					<div class="restaurants">
						<p class="restaurant"> 
							<?=$row['ResName']?></br>
							<?=$row['Address']?></br>
							<?=$row['PhoneNumber']?>
						</p>
					</div>
				<?php endforeach; ?>
			<?php endif ?>
		</div>
	</body>
</html>
