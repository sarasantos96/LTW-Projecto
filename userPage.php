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

    <div id= "signOptions">
      <ul>
          <li> <a href="foodify.php"> Main Page </a> </li>
          <li> <a href="database/logout.php"> Log Out </a> <li>
      </ul>
    </div>

    <div class = "userInfo">
      <?php include_once('database/userData.php'); $path = 'sqlite:restaurant.db'?>
      <img id="profimg" src = <?php echo userPhoto($path); ?> alt = "Foodify" height="200" width="200">
      <h1 id="userfullname"> <?php echo userFullName($path); ?> </h1>
      <h2 id="username" > <?= $_SESSION['username'] ?></h2>
      <button id="editButton" onclick="location.href = 'editUserpage.php'"> Edit Profile </button>
    </div>
  </body>
</html>
