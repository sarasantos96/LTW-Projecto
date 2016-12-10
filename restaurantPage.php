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
		<div id="restaurant">
			<?php include_once('database/getRestaurantByID.php'); ?>
			<p><?=$restData['Name']?></p>
			<p><?=$restData['Address']?></p>
			<p><?=$restData['PhoneNumber']?></p>
		</div>
	</body>