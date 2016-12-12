<!DOCTYPE html>

<html>
  <?php session_start(); ?>
  <head>
    <title> My Profile </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/reset.css" >
    <link rel="stylesheet" href="styles/userPageStyle.css" />
    <link rel="shortcut icon" href="res/logo.png"/>
	<script type="text/javascript" src="userPage.js"></script>
  </head>

  <body>
    <?php include_once('templates/header.php'); ?>
    <?php include_once('database/userData.php'); $path = 'sqlite:restaurant.db'?>

    <div id= "signOptions">
      <ul>
          <li> <a href="foodify.php"> Main Page </a> </li>
          <li> <a href="database/logout.php"> Log Out </a> </li>
      </ul>
    </div>

    <div class = "userInfo">
      <img id="profimg" src = <?php echo userPhoto($path); ?> alt = "Foodify" height="200" width="200">
      <h1 id="userfullname"> <?php echo userFullName($path); ?> </h1>
      <h2 id="username" > <?= $_SESSION['username'] ?></h2>
      <button id="editButton" onclick="location.href = 'editUserpage.php'"> Edit Profile </button>
    </div>

    <?php
      $id = userID($path);
      $restaurants = userRestaurants($path, $id);

      if(userType($path) == 1){
    ?>
    <div class="myRestaurants">
      <h2> My Restaurants </h2>
      <?php if($restaurants != null){ ?>
      <div class = "restaurant">
        <ul>
        <?php foreach ($restaurants as $restaurant) { ?>
            <li> <a href="restaurantPage.php?id=<?=$restaurant['RestaurantID']?>" > <?php echo $restaurant['Name']; ?> </a>
              <img  class="delimg" src = "res/delete.png" alt = "delete" height="15" width="15" onClick="onClickDelete('<?=$restaurant['RestaurantID']?>')">
              <a href="editRestaurant.php?id=<?=$restaurant['RestaurantID']?>" > <img class="editimg" src = "res/edit.png" alt = "edit" height="15" width="15"> </a>
            </li>

        <?php } ?>
        <ul>

        <?php }else{ ?>
            <p id="message"> You have no Restaurants! </p>
        <?php } ?>
      </div>
      <button id="addRestButton" onclick="location.href = 'addRestaurant.php'"> Add New Restaurant </button>
    </div>
    <?php } ?>
  </body>
</html>
