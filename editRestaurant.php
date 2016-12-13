<!DOCTYPE html>

<html>
  <?php session_start(); ?>

  <head>
    <title> Edit Restaurant </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/reset.css" >
    <link rel="stylesheet" href="styles/editRestaurantStyle.css" >
    <link rel="shortcut icon" href="res/logo.png"/>
	<script type="text/javascript" src="editRestaurant.js"></script>
  </head>

  <body>
    <?php include_once('templates/header.php'); ?>

    <div id= "signOptions">
      <ul>
          <li> <a href="foodify.php"> Main Page </a> </li>
          <li> <a href="database/logout.php"> Log Out </a> </li>
      </ul>
    </div>


    <?php include_once('database/restaurantData.php'); ?>
		<?php
			$name = restaurantName($_GET['id']);
			$address = restaurantAddress($_GET['id']);
			$phone = restaurantPhoneNumber($_GET['id']);
			$city = restaurantCity($_GET['id']);
      $path = 'sqlite:restaurant.db';
		?>
    <img id="restfimg" src = <?php echo restaurantPhoto($_GET['id']); ?> alt = "Foodify" height="300" width="400"> <br>
    <form class="photoForm" action="database/chooseRestaurantPhoto.php?id=<?=$_GET['id']?>" method="POST" enctype="multipart/form-data">
     <input type="file" name="image"  /> <br>
     <input id ="submitButton" type="submit"/>
    </form>

    <div class="userInput">
  		<form name="edit_form" class="edit" action="database/applyRestaurantChanges.php?id=<?php echo$_GET["id"]?>" method="post" onSubmit="return submitForm()">
  			<label id="name"> Name <br>
  				<input class="formInput" type="text" name="name" value= "<?= $name ?>" > <br>
              </label>

  			<label id="address"> Address <br>
  				<input class="formInput" type="text" name="address" value="<?= $address ?>" > <br>
              </label>

  			<label id="phone"> Phone <br>
  				<input class="smallformInput" type="text" name="phone" value="<?= $phone ?>" > <br>
              </label>

  			<label id="city"> City <br>
  				<input class="smallformInput" type="text" name="city" value="<?= $city ?>" > <br>
              </label>

  			<input id = "applyButton" type = "submit" value = "Apply Changes">
        <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
  		</form>

  		<p id="warnings"></p>
    </div>
  </body>
</html>
