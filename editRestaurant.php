<!DOCTYPE html>

<html>
  <?php session_start(); ?>

  <head>
    <title> Edit Restaurant </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/reset.css" >
    <link rel="shortcut icon" href="res/logo.png"/>
	<script type="text/javascript" src="editRestaurant.js"></script>
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
        <?php include_once('database/restaurantData.php');?>
		<?php
			$name = restaurantName($_GET['id']);
			$address = restaurantAddress($_GET['id']);
			$phone = restaurantPhoneNumber($_GET['id']);
			$city = restaurantCity($_GET['id']);
		?>
		<form name="edit_form" class="edit" action="database/applyRestaurantChanges.php?id=<?php echo$_GET["id"]?>" method="post" onSubmit="return submitForm()">
			<label id="name"> Name <br>
				<input class="userInput" type="text" name="name" value= "<?= $name ?>" > <br>
            </label>
			
			<label id="address"> Address <br>
				<input class="userInput" type="text" name="address" value="<?= $address ?>" > <br>
            </label>
			
			<label id="address"> Phone <br>
				<input class="userInput" type="text" name="phone" value="<?= $phone ?>" > <br>
            </label>
			
			<label id="address"> City <br>
				<input class="userInput" type="text" name="city" value="<?= $city ?>" > <br>
            </label>
			
			<input id = "applyButton" type = "submit" value = "Apply Changes">
		</form>
		
		<p id="warnings"></p>
    </div>
  </body>
</html>