<?php
	$search = $_GET['search'];
	$db = new PDO('sqlite:restaurant.db');
	$count = 1;

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
		<title>Foodify - The best places to eat</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="reset.css" >
		<link rel="stylesheet" href="search.css" >
		<link rel="shortcut icon" href="res/logo.png"/>
	</head>
	<body>
		<div id="header">
		  <header>
			<img id="headerimg" src = "res/logo.png" alt = "Foodify" height="42" width="42">
			<div id="headerText">
			  <h1 id ="mainTitle"> Foodify </h1>
			  <h2 id="slogan"> Eat what you want, where you want </h2>
			</div>
		  </header>
		  <div id= "signOptions">
		  <?php if(isset($_SESSION['username']) && $_SESSION['username'] != null) { ?>
			<ul>
			   <li> <a href="userPage.php"> Hello <?= $_SESSION['username'] ?> </a> </li>
			   <li> <a href="logout.php"> Log Out </a> </li>
			</ul>
		  <?php } else { ?>
			<ul>
				  <li> <a href="login.php"> Log In </a> </li>
				  <li> <a href="signup.html"> Sign Up </a> <li>
			</ul>
		  <?php } ?>
		  </div>
		</div>
		<div id="result">
			<?php if($cities == NULL): ?>
				<?php if($restaurants == NULL): ?>
					<p> Não encontrou nada </p>
				<?php else: ?>
					<?php foreach($restaurants as $row): ?>
						<div class="restaurant">
							<h2>
								<?=$count?>
								<?=$row['Name']?>
							</h2>
							<p>
								<?=$row['Address']?></br>
								<?=$row['PhoneNumber']?>
							</p>
						<?php $count = $count + 1; ?>
						<button class="button" type="button">Go to page</button>
						</div>
					<?php endforeach; ?>
				<?php endif ?>
			<?php else: ?>
				<?php foreach($cities as $row): ?>
					<div class="restaurant">
						<h2>
							<?=$count?>.
							<?=$row['ResName']?>
						</h2>
						<p>
							<?=$row['Address']?></br>
							<?=$row['PhoneNumber']?>
						</p>
						</br>
						<?php $count = $count + 1; ?>
						<button class="button" type="button">Go to page</button>
					</div>
				<?php endforeach; ?>
			<?php endif ?>
		</div>
	</body>
</html>
