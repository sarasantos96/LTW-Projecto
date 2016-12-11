<!DOCTYPE html>

<html>
  <?php session_start(); ?>
  <head>
    <title> My Profile </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/reset.css" >
    <link rel="stylesheet" href="styles/userPageStyle.css" />
    <link rel="shortcut icon" href="res/logo.png"/>
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

      if($restaurants != null){
    ?>
    <div class="myRestaurants">
      <h2> My Restaurants </h2>
      <div class = "restaurant">
        <ul>
        <?php
            foreach ($restaurants as $restaurant) { ?>
            <li> <a href="restaurantPage.php?id=<?=$restaurant['RestaurantID']?>" > <?php echo $restaurant['Name']; ?> </a> </li>
        <?php    }
          }
        ?>
        <ul>
      </div>
    </div>
  </body>
</html>
