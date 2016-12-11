<!DOCTYPE html>
<html>
	<?php session_start(); ?>
	<head>
		<title>Foodify - The best places to eat</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/reset.css" >
		<link rel="stylesheet" href="styles/restaurantPage.css" >
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
		<div id="restaurant">
			<?php include_once('database/getRestaurantByID.php'); ?>
			<h1><?=$restData['Name']?></h1>
			<div id="image">
				<img id="profimg" src="res/profile-icon" alt = "Foodify" height="400" width="400"> <br>
			</div>
			<div id="data">
				<h1>Information<h1>
				<p>Address: <?=$restData['Address']?></p>
				<p>Contact: <?=$restData['PhoneNumber']?></p>
			</div>
			<div id="comments">
				<div id="userPic">
					<img id="profimg" src="res/profile-icon" alt = "Foodify" height="70" width="70"> <br>
				</div>
				<div id="username">
					<p> User said: </p>
				</div>
				<div id="comment">
					<p> Very good Restaurant... Hmm yes</p>
				</div>
			</div>
		</div>
	</body>