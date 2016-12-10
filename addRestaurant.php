<!DOCTYPE html>

<html>
	<?php session_start(); ?>

	<head>
		<title>Add Restaurant - Fodify</title>
		<link rel="stylesheet" href="styles/reset.css" >
		<!--CSS-->
		<link rel="shortcut icon" href="res/logo.png"/>
		<script type="text/javascript" src="addRestaurant.js"></script>
	</head>

	<body>
		<?php include_once('templates/header.php'); ?>

		<div id= "signOptions">
			<ul>
				<li> <a href="foodify.php"> Main Page </a> </li>
				<li> <a href="logout.php"> Log Out </a> <li>
			</ul>
		</div>

		<div class="userInput">
			<form name="info_form" class="edit" action="database/submitNewRestaurant.php" method="post" onSubmit="return submitForm()">
            <label id="name"> Restaurant Name <br>
              <input class="userInput" type="text" name="name" > <br>
            </label>
            <label id="address"> Address <br>
              <input class="userInput" type="text" name="address" > <br>
            </label>
            <label id="phone"> Phone Number <br>
              <input class="userInput" type="number" name="phone" > <br>
            </label>
			<label id="city"> City <br>
              <input class="userInput" type="text" name="city" > <br>
            </label>
            <input id = "saveButton" type = "submit" value = "Save">
        </form>
		</div>

		<p id="warnings"></p>

	</body>
</html>
