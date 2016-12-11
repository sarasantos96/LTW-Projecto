<!DOCTYPE html>
<html>
	<?php session_start(); ?>
	<head>
		<title>Foodify - The best places to eat</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/reset.css" >
		<link rel="stylesheet" href="styles/search.css" >
		<link rel="shortcut icon" href="res/logo.png"/>
	</head>

	<body>
		<?php include_once('templates/header.php'); ?>
		<div id= "signOptions">
			<?php if(isset($_SESSION['username']) && $_SESSION['username'] != null) { ?>
				<ul>
				   <li> <a href="userPage.php"> Hello <?= $_SESSION['username'] ?> </a> </li>
				   <li> <a href="database/logout.php"> Log Out </a> </li>
				</ul>
			<?php } else { ?>
				<ul>
					  <li> <a href="login.php"> Log In </a> </li>
					  <li> <a href="signup.php"> Sign Up </a> <li>
				</ul>
			<?php } ?>
		</div>

		<div id="result">
			<?php include_once('database/searchRestaurants.php'); ?>
			<?php if($restaurants == NULL): ?>
				<div class="noResult">
					<p> No search results for <?=$search?> </p>
				</div>
			<?php else: ?>
				<?php foreach($restaurants as $row): ?>
					<div class="restaurant">
						<h2> <?=$count?>. <?=$row['ResName']?></h2>
						<?php $count = $count + 1; ?>
						<p> Address: <?=$row['Address']?></br>Contact: <?=$row['PhoneNumber']?></p></br>
						<button class="button" type="button" onclick="location.href = 'restaurantPage.php?id=<?=$row['RestaurantID']?>'">Go to page</button>
					</div>
				<?php endforeach; ?>
			<?php endif ?>
			<button class="backButton" type="button" onclick="location.href = 'foodify.php'">Back to main page</button>
		</div>
	</body>
</html>
